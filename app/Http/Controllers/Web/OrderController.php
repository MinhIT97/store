<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderCreateRequest;
use App\Mail\OrderMail;
use App\Notifications\OrderProductNotification;
use App\Traits\CarTrait;
use App\User;
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

        $cart = $this->getCart($cart_id);

        return view(
            'pages.checkout',
            [
                'cart' => $cart,
            ]
        );
    }
    public function order(OrderCreateRequest $request)
    {

        $data = $request->all();

        if (Auth::check()) {
            $data['user_id'] = Auth::user()->id;
        } else {
            $data['user_id'] = null;
        }

        $order = $this->entity_order->create($data);

        $order_id   = $order->id;

        $code = 'STORE-'.$order_id;

        $order['code'] = $code;
        $order->save();
        $cart_id    = $this->idCookieCart();
        $cart_items = $this->entity_cart_item->where('cart_id', $cart_id)->get();
        foreach ($cart_items as $cart_item) {
            $data = [
                'product_id' => $cart_item->product_id,
                'quantity'   => $cart_item->quantity,
                'price'      => $cart_item->price,
                'order_id'   => $order->id,
                'size_id'    => $cart_item->size_id,
                'color_id'   => $cart_item->color_id,
                'amount'     => $cart_item->amount,
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

        return redirect()->route('index');
    }

    public function plusTotalOrder($order_id)
    {
        $order = $this->entity_order->where('id', $order_id)->first();

        $total_price        = $order->calculateTotal();
        $order->total_price = $total_price;
        $order->update();
    }
}
