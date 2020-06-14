<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CartUpdateRequest;
use App\Repositories\CartItemRepository;
use App\Repositories\CartRepository;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class CartController extends Controller
{

    protected $cartRepository;
    protected $productRepository;
    protected $cartItemRepository;

    public function __construct(CartRepository $cartRepository, ProductRepository $productRepository, CartItemRepository $cartItemRepository)
    {
        $this->cartEntity         = $cartRepository->getEntity();
        $this->productEntity      = $productRepository->getEntity();
        $this->cartItemRepository = $cartItemRepository->getEntity();
    }

    public function changQuantity(CartUpdateRequest $request, $id)
    {

        $cart_item = $this->cartItemRepository->find($id);
        $cart_id   = $cart_item->cart_id;

        $cart = $this->cartEntity->find($cart_id);

        $product = $this->productEntity->find($cart_item->product_id);

        $quantity = $request->quantity;

        $price  = $product->price;
        $amount = $price * $quantity;

        $cart_item->amount   = $amount;
        $cart_item->quantity = $quantity;
        $cart_item->update();
        $total_cart_items = $this->cartItemRepository->where('cart_id', $cart_item->cart_id)->sum('amount');
        $cart->total      = $total_cart_items;
        $cart->update();

        return response()->json(['total_cart_items'=>$total_cart_items,'amount'=>$amount]);
    }

    public function index()
    {
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
        //
    }
}
