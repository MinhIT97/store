<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\OrderRepository;
use Carbon\Carbon;

class DashboardController extends Controller
{
    protected $repository_order;
    public function __construct(OrderRepository $repository_order)
    {
        $this->entity_order = $repository_order->getEntity();
    }
    public function index()
    {
        $currentDate = Carbon::now();

        $month       = $currentDate->subDays();

        $year = Carbon::now()->subYears(5);

        $order        = $this->entity_order->whereDate('created_at', '>', $month)->get();

        $weeklyOrders = $order->count('id');
        $weeklySales  = $order->sum('total_price');
        $nowmonth     = Carbon::now()->subDays(Carbon::now()->dayOfWeek)->subWeek();

        $beforeMonth = $currentDate->subDays()->subWeek();

        $beforeOrder = $this->entity_order->whereBetween('created_at', [$beforeMonth->toDateString(), $nowmonth->toDateString()])->get();

        $beforeweeklyOrders = $beforeOrder->count('id');
        $beforeweeklySales  = $beforeOrder->sum('total_price');
        if ($beforeweeklySales != 0) {
            $persent = round(($weeklySales - $beforeweeklySales) / $beforeweeklySales, 3) * 100;
        } else {
            $persent = 100;
        }


        if ($beforeweeklyOrders != 0) {

            $perentOrders = round(($weeklyOrders - $beforeweeklyOrders) / $beforeweeklyOrders, 3) * 100;
        } else {
            $perentOrders = 100;
        }

        return view('admin.pages.dashboard.dashboard', [
            'weeklyOrders' => $weeklyOrders,
            'weeklySales'  => $weeklySales,
            'persent'      => $persent,
            'perentOrders' => $perentOrders,
        ]);
    }
}
