<?php

namespace App\Http\Controllers\Web;

use App\Entities\Province;
use App\Http\Controllers\Controller;
use App\Http\Requests\OrderCreateRequest;
use App\Mail\OrderMail;
use App\Notifications\OrderProductNotification;
use App\Traits\CarTrait;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Pusher\Pusher;

class OrderController extends Controller
{
    use CarTrait;
    protected $repository;
    protected $repository_cart_item;
    protected $repository_product;
    protected $repository_order;
    protected $repository_order_item;

    public function show()
    {
        $cart_id = $this->idCookieCart();

        $cart     = $this->getCart($cart_id);
        $province = Province::where('status', Province::STATUS_ACTIVE)->get();

        return view(
            'pages.checkout',
            [
                'cart'     => $cart,
                'province' => $province,
            ]
        );
    }
    public function order(OrderCreateRequest $request)
    {

        $total = $this->total($request);
        if ($request->payment_method === "vnpay") {
            $vnp_Url        = config('laravel-omnipay.gateways.VNPay.options.vnp_Url');
            $vnp_Returnurl  = config('laravel-omnipay.gateways.VNPay.options.vnp_Returnurl');
            $vnp_TmnCode    = config('laravel-omnipay.gateways.VNPay.options.vnpTmnCode'); //Mã website tại VNPAY
            $vnp_HashSecret = config('laravel-omnipay.gateways.VNPay.options.vnpHashSecret'); //Chuỗi bí mật
            $vnp_TxnRef     = date('YmdHis'); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
            $vnp_OrderInfo  = "Thanh toán hóa đơn mua hàng";
            $vnp_OrderType  = 200000;
            $vnp_Amount     = $total * 100;
            $vnp_Locale     = 'vn';
            $vnp_IpAddr     = request()->ip();
            $inputData      = array(
                "vnp_Version"    => "2.0.0",
                "vnp_TmnCode"    => $vnp_TmnCode,
                "vnp_Amount"     => $vnp_Amount,
                "vnp_Command"    => "pay",
                "vnp_CreateDate" => date('YmdHis'),
                "vnp_CurrCode"   => "VND",
                "vnp_IpAddr"     => $vnp_IpAddr,
                "vnp_Locale"     => $vnp_Locale,
                "vnp_OrderInfo"  => $vnp_OrderInfo,
                "vnp_OrderType"  => $vnp_OrderType,
                "vnp_ReturnUrl"  => $vnp_Returnurl,
                "vnp_TxnRef"     => $vnp_TxnRef,
            );
            ksort($inputData);
            $query    = "";
            $i        = 0;
            $hashdata = "";
            foreach ($inputData as $key => $value) {
                if ($i == 1) {
                    $hashdata .= '&' . $key . "=" . $value;
                } else {
                    $hashdata .= $key . "=" . $value;
                    $i = 1;
                }
                $query .= urlencode($key) . "=" . urlencode($value) . '&';
            }
            $vnp_Url = $vnp_Url . "?" . $query;
            if (isset($vnp_HashSecret)) {
                $vnpSecureHash = hash('sha256', $vnp_HashSecret . $hashdata);
                $vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' . $vnpSecureHash;
            }
            return redirect($vnp_Url);
        };
        $this->handleCart($request);

        return redirect()->route('index');
    }

    public function total($request)
    {
        $cart_id    = $this->idCookieCart();
        $cart_items = $this->entity_cart_item->where('cart_id', $cart_id)->get();
        $total      = 0;

        foreach ($cart_items as $item) {
            $price = $this->entity_product->find($item->product_id)->price;
            $amout = $item->quantity * $price;
            $total += $amout;
        }
        return $total;
    }

    public function handleCart($request)
    {
        $data = $request->all();
        if (Auth::check()) {
            $data['user_id'] = Auth::user()->id;
        } else {
            $data['user_id'] = null;
        }
        $order         = $this->entity_order->create($data);
        $order_id      = $order->id;
        $code          = 'STORE-' . $order_id;
        $order['code'] = $code;
        $order->save();

        $cart_id    = $this->idCookieCart();
        $cart_items = $this->entity_cart_item->where('cart_id', $cart_id)->get();
        foreach ($cart_items as $cart_item) {
            $price = $this->entity_product->find($cart_item->product_id)->price;
            $data  = [
                'product_id' => $cart_item->product_id,
                'quantity'   => $cart_item->quantity,
                'price'      => $cart_item->price,
                'order_id'   => $order->id,
                'size_id'    => $cart_item->size_id,
                'color_id'   => $cart_item->color_id,
                'amount'     => $cart_item->quantity * $price,
            ];
            $this->entity_order_item->create($data);
        }
        $this->plusTotalOrder($order_id);
        $this->entity_cart_item->where('cart_id', $cart_id)->delete();
        $cart        = $this->entity_cart->where('id', $cart_id)->first();
        $total       = $cart->total;
        $cart->total = 0;
        $cart->update();

        $user   = User::where('level', 1)->where('status', 1)->first();
        $notify = [
            "title"   => $request->name,
            "content" => "just bought the product",
        ];
        $user->notify(new OrderProductNotification($notify));
        Mail::to($order->email)->send(new OrderMail($cart_items, $total));
        $options = array(
            'cluster'   => 'ap1',
            'encrypted' => true,
        );
        $pusher = new Pusher(
            config('pusher.PUSHER_APP_KEY'),
            config('pusher.PUSHER_APP_SECRET'),
            config('pusher.PUSHER_APP_ID'),
            $options
        );
        $data = $notify;
        $pusher->trigger('send-message', 'OrderNotification', $data);
    }

    function return(Request $request)
    {
        if ($request->vnp_ResponseCode == "00") {
            return redirect()->route('cart.show')->with('success', 'Đã thanh toán phí dịch vụ');
        }
        return redirect()->route('cart.show')->with('error', 'Lỗi trong quá trình thanh toán phí dịch vụ');
    }

    public function plusTotalOrder($order_id)
    {
        $order = $this->entity_order->where('id', $order_id)->first();

        $total_price        = $order->calculateTotal();
        $order->total_price = $total_price;
        $order->update();
    }
}
