<?php

namespace App\Http\Controllers\Admin;

use App\Entities\Product;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductCreateRequest;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.pages.products.index');
    }

    public function man()
    {

        $products = Product::where('type', 'man')->orderBY('id', 'DESC')->paginate(20);

        return view('admin.pages.products.product-list', [
            'products' => $products,
        ]);
    }


    public function viewCreate()
    {
        return view('admin.pages.products.product-create');
    }
    public function store(ProductCreateRequest $request)
    {
        // dd($request);
        if (Product::create($request->all())) {
            return redirect()->back()->with('sucsess', 'Thêm Sản phẩm thành công');
        }
        return redirect()->back()->with('errow', 'Thêm sản phẩm thất bại');
    }

    public function editProduct($id)
    {
        $product = Product::find($id);
        return view(
            'admin.pages.products.edit-product',
            [
                'product' => $product,
            ]
        );
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
}
