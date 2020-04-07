<?php

namespace App\Http\Controllers\Admin;

use App\Entities\Brand;
use App\Entities\Category;
use App\Entities\Product;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductCreateRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Repositories\ProductRepository;

class ProductController extends Controller
{
    protected $repository;
    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
        $this->entity     = $repository->getEntity();
    }
    public function index()
    {
        return view('admin.pages.products.index');
    }

    public function man()
    {

        $products = $this->entity->where('type', 'man')->orderBY('id', 'DESC')->paginate(20);

        return view('admin.pages.products.product-list', [
            'products' => $products,
        ]);
    }

    public function viewCreate()
    {
        $categories = Category::get();
        $brands     = Brand::get();
        return view('admin.pages.products.product-create',
            [
                'categories' => $categories,
                'brands'     => $brands,
            ]);
    }
    public function store(ProductCreateRequest $request)
    {
        if ($request->hasFile('thumbnail')) {
            $request->thumbnail->move(base_path('/public/uploads'), $request->thumbnail->getClientOriginalName());
            $data              = $request->all();
            $data['thumbnail'] = $request->thumbnail->getClientOriginalName();
        } else {
            $data = $request->all();
        }
        $product = $this->entity->create($data);

        if ($product) {

            $product->categories()->attach($request->category);

            return redirect()->back()->with('sucsess', 'Thêm Sản phẩm thành công');
        }
        return redirect()->back()->with('errow', 'Thêm sản phẩm thất bại');
    }

    public function showEdit($id)
    {
        $product = Product::find($id);
        return view(
            'admin.pages.products.edit-product',
            [
                'product' => $product,
            ]
        );
    }
    public function editProduct($id, ProductUpdateRequest $request)
    {
        $product = $this->repository->find($id);
        if ($product) {
            $product->update($request->all());
            return redirect()->back()->with('sucsess', 'Update sucsess');
        }

        return view('admin.pages.samples.error-404');
    }
    public function woman()
    {
        $products = Product::where('type', 'woman')->orderBY('id', 'DESC')->paginate(10);

        return view('admin.pages.products.product-list', [
            'products' => $products,
        ]);
    }

    public function accessories()
    {
        $products = Product::where('type', 'accessories')->orderBY('id', 'DESC')->paginate(10);

        return view('admin.pages.products.product-list', [
            'products' => $products,
        ]);
    }

    public function destroy($id)
    {
        $product = $this->entity->find($id);
        if (!$product) {
            return view('admin.pages.samples.error-404');
        }

        $product->delete();

        return redirect()->back()->with('sucsess', 'Delete product sucsess');
    }
}
