<?php

namespace App\Http\View\Composers;

use App\Repositories\CartRepository;
use Illuminate\Support\Facades\Cookie;
use Illuminate\View\View;

class CartComposer
{

    protected $cart;

    public function __construct(CartRepository $cart)
    {
        $this->cart = $cart;
    }

    public function compose(View $view)
    {
        $cart_id = Cookie::get('lionCart');
        $cart    = $this->cart->withCount('cartItems')->where('id',$cart_id)->first();
        $view->with('cart', $cart);
    }
}
