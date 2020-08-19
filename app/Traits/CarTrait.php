<?php

namespace App\Traits;

use App\Repositories\AttributeRepository;
use App\Repositories\CartItemRepository;
use App\Repositories\CartRepository;
use App\Repositories\DiscountRepository;
use App\Repositories\OrderItemRepository;
use App\Repositories\OrderRepository;
use App\Repositories\ProductRepository;
use Illuminate\Support\Facades\Cookie;

trait CarTrait
{
    protected $repository;
    protected $repository_cart_item;
    protected $repository_product;
    protected $repository_order;
    protected $repository_order_item;
    protected $discountRepository;
    public function __construct(CartRepository $repository, CartItemRepository $repository_cart_item, ProductRepository $repository_product,
        OrderRepository $repository_order, OrderItemRepository $repository_order_item, AttributeRepository $repository_attribute, DiscountRepository $discountRepository
    ) {
        $this->repository           = $repository;
        $this->entity_cart          = $repository->getEntity();
        $this->repository_cart_item = $repository_cart_item;
        $this->entity_cart_item     = $repository_cart_item->getEntity();
        $this->repository_product   = $repository_product;
        $this->entity_product       = $repository_product->getEntity();
        $this->entity_order         = $repository_order->getEntity();
        $this->entity_order_item    = $repository_order_item->getEntity();
        $this->entity_attribute     = $repository_attribute->getEntity();
        $this->entityDiscount       = $discountRepository->getEntity();
    }
    public function idCookieCart()
    {
        $cart_id = Cookie::get('lionCart');
        return $cart_id;
    }
    public function getCart($cart_id)
    {
        $cart = $this->entity_cart->withCount('cartItems')->find($cart_id);

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
            $cart = $this->entity_cart->create($data);
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

        $cart_item = $this->entity_cart_item->where([
            ['cart_id', $cart_id],
            ['product_id', $product_id],
            ['color_id', $color_id],
            ['size_id', $size_id],

        ])->first();

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
    public function checkDiscount($request)
    {

    }
}
