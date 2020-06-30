<?php
namespace App\Services;

use App\Repositories\AttributeRepository;
use App\Repositories\OrderItemRepository;
use App\Repositories\OrderRepository;
use App\Repositories\ProductRepository;

class OrderItemService
{

    protected $productRepository;
    protected $orderItemRepository;
    protected $orderRepository;
    protected $attributeRepository;
    public function __construct(OrderRepository $orderRepository, OrderItemRepository $orderItemRepository, ProductRepository $productRepository, AttributeRepository $attributeRepository)
    {
        $this->orderItemRepository = $orderItemRepository;
        $this->entityOrderItems    = $orderItemRepository->getEntity();
        $this->orderRepository     = $orderRepository;
        $this->entityOrder         = $orderRepository->getEntity();
        $this->productRepository   = $productRepository;
        $this->entityProduct       = $productRepository->getEntity();

        $this->attributeRepository = $attributeRepository;
        $this->entityAttribute     = $attributeRepository->getEntity();
    }

    public function create($request)
    {
        $product_id = $request->product_id;
        $color_id   = $request->color_id;
        $size_id    = $request->size_id;
        $quantity   = $request->quantity;

        $attribute_quantity = $this->entity_attribute->where([
            'product_id' => $product_id,
            'size_id'    => $size_id,
            'color_id'   => $color_id,
        ])->get()->sum('quantity');


        $order_item_quantity = $this->entityOrderItems->where([
            'product_id' => $product_id,
            'size_id'    => $size_id,
            'color_id'   => $color_id,
        ])->get()->sum('quantity');

        dd($order_item_quantity);

        $product = $this->entityProduct->find($product_id);
    }
}
