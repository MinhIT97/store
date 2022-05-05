<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Repositories\OrderRepository;
use Illuminate\Support\Facades\Auth;

class HistoryOrder extends Controller
{

    protected $orderRepository;
    public function __construct(OrderRepository $orderRepository)
    {
        $this->orderRepository = $orderRepository;
        $this->orderEntity     = $orderRepository->getEntity();
    }
    public function index()
    {
        $user_id = Auth::user()->id;
        $orders  = $this->orderEntity->where('user_id', $user_id)->paginate(10);
        return view('pages.orders.list-order', [
            'orders' => $orders,
        ]);
    }
    public function show($id)
    {
        $user_id = Auth::user()->id;
        $order  = $this->orderEntity->where([
            'user_id' => $user_id,
            'id'      => $id,
        ])->first();

        return view('pages.orders.detail-order', [
            'order' => $order,
        ]);
    }
}
