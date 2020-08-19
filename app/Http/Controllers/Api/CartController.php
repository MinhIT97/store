<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CartUpdateRequest;
use App\Repositories\CartItemRepository;
use App\Repositories\CartRepository;
use App\Repositories\DiscountRepository;
use App\Repositories\ProductRepository;
use App\Services\CartService;

class CartController extends Controller
{

    protected $cartRepository;
    protected $productRepository;
    protected $cartItemRepository;
    protected $cartService;
    protected $discountRepository;

    public function __construct(CartRepository $cartRepository, ProductRepository $productRepository, CartItemRepository $cartItemRepository, CartService $cartService, DiscountRepository $discountRepository)
    {
        $this->cartEntity         = $cartRepository->getEntity();
        $this->productEntity      = $productRepository->getEntity();
        $this->cartItemRepository = $cartItemRepository->getEntity();
        $this->cartService        = $cartService;

        $this->discountEntity = $discountRepository->getEntity();
    }

    public function changQuantity(CartUpdateRequest $request, $id)
    {

        $cart_item = $this->cartItemRepository->find($id);

        $data = $this->cartService->handleCartItem($request, $cart_item);

        return response()->json($data);
    }

    public function checkDiscount($code)
    {
        $discount = $this->discountEntity->where('code', $code)->first();
        if (!$discount) {
            return response()->json(['message' => 'Invalid coupon code']);
        }
        $percent = $discount->percent;
        return response()->json(['percent' => $percent]);
    }
}
