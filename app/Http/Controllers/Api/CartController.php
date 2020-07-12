<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CartUpdateRequest;
use App\Repositories\CartItemRepository;
use App\Repositories\CartRepository;
use App\Repositories\ProductRepository;
use App\Services\CartService;

class CartController extends Controller
{

    protected $cartRepository;
    protected $productRepository;
    protected $cartItemRepository;
    protected $cartService;

    public function __construct(CartRepository $cartRepository, ProductRepository $productRepository, CartItemRepository $cartItemRepository, CartService $cartService)
    {
        $this->cartEntity         = $cartRepository->getEntity();
        $this->productEntity      = $productRepository->getEntity();
        $this->cartItemRepository = $cartItemRepository->getEntity();
        $this->cartService        = $cartService;
    }

    public function changQuantity(CartUpdateRequest $request, $id)
    {

        $cart_item = $this->cartItemRepository->find($id);

        $data = $this->cartService->handleCartItem($request, $cart_item);

        return response()->json($data);
    }
}
