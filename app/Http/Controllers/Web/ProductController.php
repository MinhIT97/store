<?php

namespace App\Http\Controllers\Web;

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
        $products = $this->entity->where('type', $request->type)->published()->paginate(12);

        return view('pages.products', [
            'products' => $products,
        ]);
    }

}
