<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderItemCreateRequest;
use App\Http\Requests\OrderUpdateRequest;
use App\Repositories\ColorRepository;
use App\Repositories\OrderRepository;
use App\Repositories\ProductRepository;
use App\Repositories\SizeRepository;
use App\Services\OrderItemService;
use App\Traits\Search;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    use Search;
    protected $repository;
    protected $productRepository;
    protected $colorRepository;
    protected $sizeRepository;
    protected $orderItemService;
    public function __construct(OrderRepository $repository, ProductRepository $productRepository, ColorRepository $colorRepository, SizeRepository $sizeRepository, OrderItemService $orderItemService)
    {
        $this->repository       = $repository;
        $this->entity           = $repository->getEntity();
        $this->entityProduct    = $productRepository->getEntity();
        $this->entityColor      = $colorRepository->getEntity();
        $this->entitySize       = $sizeRepository->getEntity();
        $this->orderItemService = $orderItemService;
    }
    public function index(Request $request)
    {

        $query = $this->entity->query();

        $query = $this->applyConstraintsFromRequest($query, $request);
        $query = $this->applySearchFromRequest($query, ['name', 'email', 'phone'], $request);
        $query = $this->applyOrderByFromRequest($query, $request);

        $orders = $query->paginate(20);
        $orders->setPath('/search?search=' . $request->get('search'));

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

    public function showCreateItems($id)
    {
        $order    = $this->entity->findOrFail($id);
        $products = $this->entityProduct->all();
        $colors   = $this->entityColor->all();
        $sizes    = $this->entitySize->all();
        return view('admin.pages.orders.items.create-items', [
            'order'    => $order,
            'products' => $products,
            'colors'   => $colors,
            'sizes'    => $sizes,
        ]);
    }
    public function crateItems(OrderItemCreateRequest $request)
    {
        $this->orderItemService->create($request);

        return redirect()->back()->with('sucsess', 'Create item sucsess');

    }

    public function orderItems($id)
    {
        $itemOrder = $this->entity->findOrFail($id);
        return view('admin.pages.orders.items.item-list', [
            'itemOrder' => $itemOrder,
        ]);

    }

    public function destroy($id)
    {
        $orders = $this->entity->findOrfail($id);
        $orders->delete();
        return redirect()->back()->with('sucsess', 'Delete Order sucsess');
    }
}
