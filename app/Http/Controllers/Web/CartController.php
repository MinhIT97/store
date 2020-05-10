<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\CartCreateRequest;

use App\Traits\CarTrait;

class CartController extends Controller
{
    use CarTrait;
    protected $repository;
    protected $repository_cart_item;
    protected $repository_product;


    public function __invoke(CartCreateRequest $request)
    {
        $cart_id = $this->idCookieCart();
        $this->addCart($request, $cart_id);
        $this->addCartItem($request, $cart_id);
        $this->plusTotalCart($request, $cart_id);

        return redirect()->back()->with('sucsess', 'Add cart sucsess');
    }

    public function destroy($id)
    {
        $cart_item        = $this->entity_cart_item->findOrFail($id);
        $total_cart_items = $this->entity_cart_item->where('cart_id', $cart_item->cart_id)->sum('amount');
        $cart_id          = $cart_item->cart_id;
        $cart_id          = $this->idCookieCart();
        if ($cart_id === $cart_id) {
            $cart_item->delete();
            $cart        = $this->getCart($cart_id);
            $cart->total = $total_cart_items - $cart_item->amount;
            $cart->update();
        }

        return redirect()->back()->with('sucsess', 'Delete item sucsess');
    }
}
