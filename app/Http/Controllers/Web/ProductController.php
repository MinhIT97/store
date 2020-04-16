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
        $products = $this->entity->where('type', $request->type)->published()->latest()->paginate(12);
        $poster   = Poster::where('type', $request->type)->latest()->published()->first();
        return view('pages.products', [
            'products' => $products,
            'poster'   => $poster,
        ]);
    }

}
