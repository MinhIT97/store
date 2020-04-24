<?php

namespace App\Http\Controllers\Web;

use App\Entities\Poster;
use App\Http\Controllers\Controller;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $repository;
    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
        $this->entity     = $repository->getEntity();
    }

    public function index(Request $request)
    {
        $query = $this->entity->where('type', $request->type)->published()->latest();
        $product_count = $query->get();
        $products= $query->paginate(12);
        $poster   = Poster::where('type', $request->type)->latest()->published()->first();
        return view('pages.products', [
            'products' => $products,
            'poster'   => $poster,
            'product_count' =>$product_count,
        ]);
    }

}
