<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    protected $repository;
    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
        $this->entity     = $repository->getEntity();
    }
    public function show(Request $request)
    {
        $type    = $request->type;
        $slug    = $request->slug;
        $product = $this->entity->where('type', $type)->where('slug', $slug)->first();
        return view('pages.product-detail', [
            'product' => $product,
        ]);
    }
}
