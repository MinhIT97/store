<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderUpdateRequest;
use App\Repositories\OrderRepository;

class OrderController extends Controller
{
    protected $repository;
    public function __construct(OrderRepository $repository)
    {
        $this->repository = $repository;
        $this->entity     = $repository->getEntity();
    }
    public function index()
    {
        $orders = $this->entity->get();

        return view('admin.pages.orders.orders-list', [
            'orders' => $orders,
        ]);
    }

    public function show($id)
    {
        $orders = $this->entity->findOrfail($id);
        return view('admin.pages.orders.edit-orders', [
            'orders' => $orders,
        ]);
    }

    public function update(OrderUpdateRequest $request, $id)
    {
        $data = $request->all();

        $order = $this->entity->findOrfail($id);

        $order_update = $order->update($data);
        if ($order_update) {
            return redirect()->route('orders.show')->with('sucsess', 'Update order sucsess');
        }
        return redirect()->back()->with('sucsess', 'Update order sucsess');
    }

    public function destroy($id)
    {
        $orders = $this->entity->findOrfail($id);
        $orders->delete();
        return redirect()->back()->with('sucsess', 'Delete Order sucsess');
    }
}
