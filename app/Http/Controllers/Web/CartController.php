<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\CartCreateRequest;
use App\Repositories\CartItemRepository;
use App\Repositories\CartRepository;
use App\Repositories\ProductRepository;
use Illuminate\Support\Facades\Cookie;

class CartController extends Controller
{
    protected $repository;
    protected $repository_cart_item;
    protected $repository_product;
    public function __construct(CartRepository $repository, CartItemRepository $repository_cart_item, ProductRepository $repository_product)
    {
        $this->repository           = $repository;
        $this->entity               = $repository->getEntity();
        $this->repository_cart_item = $repository_cart_item;
        $this->entity_cart_item     = $repository_cart_item->getEntity();
        $this->repository_product   = $repository_product;
        $this->entity_product       = $repository_product->getEntity();
    }

    public function __invoke(CartCreateRequest $request)
    {
        $cart_id = $this->idCookieCart();
        $this->addCart($request, $cart_id);
        $this->addCartItem($request, $cart_id);
        $this->plusTotalCart($request, $cart_id);

        return redirect()->back()->with('sucsess', 'Add cart sucsess');
    }
    public function idCookieCart()
    {
        $cart_id = Cookie::get('lionCart');
        return $cart_id;
    }
    public function getCart($cart_id)
    {
        $cart = $this->entity->withCount('cartItems')->find($cart_id);

        return $cart;
    }
    public function addCart($request, $cart_id)
    {
        $cart = $this->getCart($cart_id);

        if (!$cart) {
            $data = [
                'id'    => $cart_id,
                'total' => 0,
            ];
            $cart = $this->entity->create($data);
        }
        return $cart;
    }

    public function plusTotalCart($request, $cart_id)
    {
        $cart = $this->getCart($cart_id);

        $total       = $cart->calculateTotal();
        $cart->total = $total;
        $cart->update();
    }

    public function addCartItem($request, $cart_id)
    {

        $data       = $request->all();
        $quantity   = $request->quantity;
        $product_id = $request->product_id;
        $size_id    = $request->size_id;
        $color_id   = $request->color_id;
        $product    = $this->entity_product->find($product_id);
        $price      = $product->price;

        $cart_item = $this->entity_cart_item->where('product_id', $product_id)->where('color_id', $color_id)
            ->where('size_id', $size_id)->first();
        if ($cart_item) {

            $cart_item->quantity = $cart_item->quantity + $quantity;

            $cart_item->amount = $cart_item->calculateAmount();

            $cart_item->update();
        } else {
            $data['cart_id'] = $cart_id;
            $data['amount']  = $quantity * $price;
            $this->entity_cart_item->create($data);
        }
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
