<?php

namespace App\Http\Controllers\Admin;

use App\Entities\OrderItem;
use App\Http\Controllers\Controller;
use App\Repositories\OrderItemRepository;
use App\Repositories\OrderRepository;
use App\Repositories\PostRepository;
use App\Repositories\ProductRepository;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Spatie\Analytics\Analytics;
use Spatie\Analytics\Period;

class DashboardController extends Controller
{
    protected $repository_order;
    protected $postRepository;
    protected $orderItemRepository;
    public function __construct(OrderRepository $repository_order, Analytics $analytics, PostRepository $postRepository, ProductRepository $productRepository, OrderItemRepository $orderItemRepository)
    {
        $this->entity_order    = $repository_order->getEntity();
        $this->analytics       = $analytics;
        $this->orderItemEntity = $orderItemRepository->getEntity();
        $this->postEntity      = $postRepository->getEntity();
        $this->productEntity   = $productRepository->getEntity();
        $this->transformer     = AnalyticTransformer::class;
    }
    public function index()
    {
        $currentDate  = Carbon::now();
        $month        = $currentDate->subDays();
        $year         = Carbon::now()->subYears(5);
        $order        = $this->entity_order->whereDate('created_at', '>', $month)->get();
        $orderItems   = $this->orderItemEntity->whereDate('created_at', '>', $month)->get();
        $weeklyOrders = $order->count('id');
        $weeklySales  = $order->sum('total_price');
        $net_profit   = 0;
        foreach ($orderItems as $item) {
            $original_price = $item->product->original_price * $item->quantity;

            $net_profit = $net_profit + $original_price;
        }
        $net_profit         = $weeklySales - $net_profit;
        $nowmonth           = Carbon::now()->subDays(Carbon::now()->dayOfWeek)->subWeek();
        $beforeMonth        = $currentDate->subDays()->subWeek();
        $beforeOrder        = $this->entity_order->whereBetween('created_at', [$beforeMonth->toDateString(), $nowmonth->toDateString()])->get();
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

        $topPages    = $this->topPages();
        $topBrowsers = $this->topBrowsers();
        $topPosts    = $this->topTenViewBlog();
        $topProducts = $this->topTenBuyProducts();
        $usersOnline = $this->usersOnline();
        $topCountry  = $this->topCountry();

        return view('admin.pages.dashboard.dashboard', [
            'weeklyOrders' => $weeklyOrders,
            'weeklySales'  => $weeklySales,
            'persent'      => $persent,
            'perentOrders' => $perentOrders,
            'topPages'     => $topPages,
            'topBrowsers'  => $topBrowsers,
            'topPosts'     => $topPosts,
            'topProducts'  => $topProducts,
            'usersOnline'  => $usersOnline,
            'net_profit'   => $net_profit,
        ]);
    }

    public function topPages()
    {
        $analyticsData = $this->analytics->fetchMostVisitedPages(Period::years(1), 10);
        return $analyticsData;
    }

    public function topBrowsers()
    {
        $analyticsData = $this->analytics->fetchTopBrowsers(Period::years(1), 10);
        return $analyticsData;
    }

    public function usersOnline()
    {
        $usersOnline = $this->analytics->getAnalyticsService()->data_realtime->get('ga:' . env('ANALYTICS_VIEW_ID'), 'rt:activeVisitors')->totalsForAllResults['rt:activeVisitors'];

        return $usersOnline;
    }

    public function topTenViewBlog()
    {
        $posts = $this->postEntity->orderBy('view', 'DESC')->limit(10)->get();
        return $posts;
    }
    public function topTenBuyProducts()
    {
        $ids = OrderItem::select('product_id', DB::raw('SUM(quantity) as total_sales'))
            ->groupBy('product_id')->orderBy('total_sales', 'DESC')->limit(10)->get()->pluck('product_id');

        $products = $this->productEntity->whereIn('id', $ids)->limit(10)->get();
        return $products;
    }

    public function topCountry()
    {
        $analyticsByCountry = $this->analytics->performQuery(
            Period::days(7),
            'ga:sessions',
            [
                'metrics'    => 'ga:sessions',
                'dimensions' => 'ga:country',
            ]
        );
        return $analyticsByCountry->rows;
    }
}
