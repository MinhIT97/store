<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\OrderRepository;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class CharController extends Controller
{
    protected $repository;
    public function __construct(OrderRepository $repository)
    {
        $this->entity_order = $repository->getEntity();
    }
    public function orderByYear()
    {
        $range     = Carbon::now()->subYears(5);
        $get_range = date_format(Carbon::now(), "Y/m/d");
        $yesterday = date_format(Carbon::yesterday(), "Y/m/d");

        $orderYear = $this->entity_order->whereYear('created_at', '>=', $range)->groupBy('date')->get(array(
            DB::raw('Year(created_at) as date'),
            DB::raw('COUNT(*) as "id"'),
        ));
        $sumProductDay = DB::table('orders')
            ->select(DB::raw('SUM(order_items.quantity) as countProduct'))
            ->join('order_items', 'orders.id', '=', 'order_items.order_id')
            ->join('products', 'order_items.product_id', '=', 'products.id')
            ->whereDate('orders.created_at', '=', $get_range)
            // ->groupBy('orders.created_at')
            ->first();

        if ($sumProductDay->countProduct == null) {
            return redirect()->route('dashboard.show')->with('alert', trans('chart.no_order'));
        } else {
            $sumProductYesterday = DB::table('orders')
                ->select(DB::raw('SUM(order_items.quantity) as countProduct'))
                ->join('order_items', 'orders.id', '=', 'order_items.order_id')
                ->join('products', 'order_items.product_id', '=', 'products.id')
                ->whereDate('orders.created_at', '=', $yesterday)
                // ->groupBy('orders.created_at')
                ->first();

            $totalProduct   = (int) ($sumProductDay->countProduct);
            $percentProduct = round((100 / $totalProduct), 3);
            $productBuy = DB::table('orders')
                ->select('products.type as type', DB::raw("SUM(order_items.quantity) * $percentProduct as y"))
                ->join('order_items', 'orders.id', '=', 'order_items.order_id')
                ->join('products', 'order_items.product_id', '=', 'products.id')
                ->whereDate('orders.created_at', '=', $get_range)
                ->groupBy('products.type')
                ->get();
        }

        return view('admin.pages.products.index', [
            'orderYear'  => $orderYear,
            'productBuy' => $productBuy,
        ]);
    }
}
