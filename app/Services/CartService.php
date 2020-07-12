<?php

namespace App\Services;

use App\Repositories\AttributeRepository;
use App\Repositories\CartItemRepository;
use App\Repositories\CartRepository;
use App\Repositories\ProductRepository;

class CartService
{
    protected $productRepository;
    protected $cartItemRepository;
    protected $cartRepository;
    protected $attributeRepository;
    public function __construct(ProductRepository $productRepository, CartItemRepository $cartItemRepository, CartRepository $cartRepository, AttributeRepository $attributeRepository)
    {
        $this->productEntity   = $productRepository->getEntity();
        $this->cartItemEntity  = $cartItemRepository->getEntity();
        $this->cartEntity      = $cartRepository->getEntity();
        $this->attributeEntity = $attributeRepository->getEntity();
    }

    public function handleCartItem($request, $cart_item)
    {
        $quantity = $request->quantity;
        $cart_id  = $cart_item->cart_id;

        $cart = $this->cartEntity->find($cart_id);

        $product = $this->productEntity->find($cart_item->product_id);

        $attribute = $this->attributeEntity->where($cart_item->only('product_id', 'color_id', 'size_id'))->first();


        if ($attribute->quantity < $quantity) {
            throw new \Exception("The quantity is too big !");
        } else {
            $price  = $product->price;
            $amount = $price * $quantity;


            $cart_item->amount = $amount;

            $cart_item->quantity = $quantity;

            $cart_item->update();
            $total_cart_items = $this->cartItemEntity->where('cart_id', $cart_item->cart_id)->sum('amount');
            $cart->total      = $total_cart_items;
            $cart->update();
            return ['total_cart_items' => $total_cart_items, 'amount' => $amount];
        }
    }
}
