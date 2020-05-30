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
    protected $repository_order_item;
    protected $repository_attribute;

    public function __invoke(CartCreateRequest $request)
    {
        $cart_id           = $this->idCookieCart();
        $checkCartQuantity = $this->checkCartQuantity($request, $cart_id);

        // dd($checkCartQuantity);
        if ($checkCartQuantity || $checkCartQuantity === 0) {
            return redirect()->back()->with('error', "The remaining quantity is only " . $checkCartQuantity);
        }
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
    public function checkCartQuantity($request, $cart_id)
    {
        // dd($request->all());

        $product_id = $request->product_id;
        $color_id   = $request->color_id;
        $size_id    = $request->size_id;
        $quantity   = $request->quantity;

        $attribute_quantity = $this->entity_attribute->where([
            'product_id' => $product_id,
            'size_id'    => $size_id,
            'color_id'   => $color_id,
        ])->get()->sum('quantity');

        $cart_item_quantity = $this->entity_cart_item->where([
            'cart_id'    => $cart_id,
            'product_id' => $product_id,
            'size_id'    => $size_id,
            'color_id'   => $color_id,
        ])->get()->sum('quantity');

        $order_item_quantity = $this->entity_order_item->where([
            'product_id' => $product_id,
            'size_id'    => $size_id,
            'color_id'   => $color_id,
        ])->get()->sum('quantity');

        $check_quantity = $attribute_quantity - ($quantity + $cart_item_quantity + $order_item_quantity);
        if ($check_quantity < 0) {
            return $attribute_quantity - $order_item_quantity;
        }

        return false;

    }
}
