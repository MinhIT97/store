<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderCreateRequest;
use App\Traits\CarTrait;
use Illuminate\Support\Facades\Auth;

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

        }
        $data['user_id'] = 1;

        $order    = $this->entity_order->create($data);
        $order_id = $order->id;

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
        $cart->total = 0;
        $cart->update();

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
