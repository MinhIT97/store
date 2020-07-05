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

    public function create($request, $id)
    {
        $product_id = $request->product_id;
        $color_id   = $request->color_id;
        $size_id    = $request->size_id;
        $quantity   = $request->quantity;

        $attribute_quantity = $this->entityAttribute->where([
            'product_id' => $product_id,
            'size_id'    => $size_id,
            'color_id'   => $color_id,
        ])->get()->sum('quantity');

        $order_item_quantity = $this->entityOrderItems->where([
            'product_id' => $product_id,
            'size_id'    => $size_id,
            'color_id'   => $color_id,
        ])->get()->sum('quantity');

        $order_item = $this->entityOrderItems->where([
            'order_id'   => $id,
            'product_id' => $product_id,
            'size_id'    => $size_id,
            'color_id'   => $color_id,
        ])->first();

        if (($attribute_quantity - $order_item_quantity) > 0) {
            $order   = $this->entityOrder->findOrFail($id);
            $product = $this->entityProduct->find($product_id);
            $price   = $product->price;

            // $total_item = $order->total_price;
            $totalOrder = $order->total_price;

            if ($order_item) {
                $order_amount           = $order_item->amount;
                $order_item['quantity'] = $quantity + $order_item->quantity;
                $item_price             = ($quantity * $price);
                $order_item['amount']   = $order_amount + $item_price;
                $order_item->save();
                $order['total_price'] = $totalOrder + $item_price;
                $order->save();
            } else {
                $data             = $request->all();
                $data['order_id'] = $id;
                $this->orderItemRepository->create($data);
            }

            $total = $quantity * $price;

            $order['total_price'] = $totalOrder + $total;
            $order->save();
            return true;
        }
        return false;
    }

    public function delete($id)
    {
        $order_item = $this->entityOrderItems->findOrFail($id);

        $order              = $this->entityOrder->find($order_item->order_id);
        $amount_ordere_item = $order_item->amount;

        $order_total_price    = $order->total_price;
        $order['total_price'] = $order_total_price - $amount_ordere_item;
        $order->save();

        $order_item->delete();
        return true;
    }
}
