<?php

namespace App\Http\Controllers\Web;

use App\Entities\Poster;
use App\Http\Controllers\Controller;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $activeSelected = 'manual';

    protected $repository;
    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
        $this->entity     = $repository->getEntity();
    }

    public function index(Request $request)
    {

        $query         = $this->entity->where('type', $request->type)->published();
        $product_count = $query->get();

        $query    = $this->applyOrderByFromRequest($query, $request);
        $products = $query->paginate(12);
        $poster   = Poster::where('type', $request->type)->latest()->orderBY('id','DESC')->published()->first();

        $activeSelected = $request->get('sort_by');

        return view('pages.products', [
            'products'       => $products,
            'poster'         => $poster,
            'product_count'  => $product_count,
            'activeSelected' => $activeSelected,
        ]);
    }

    public function CategoriesProduct(Request $request)
    {
        $query         = $this->entity->published();
        $product_count = $query->get();

        $query = $query->whereHas('categories', function ($query) use ($request) {
            $query->where('slug', $request->slug)->where('type', 'products');
        });

        $query    = $this->applyOrderByFromRequest($query, $request);
        $products = $query->paginate(12);
        $poster   = Poster::where('type', $request->slug)->latest()->published()->first();
        $activeSelected = $request->get('sort_by');

        return view('pages.products', [
            'products'       => $products,
            'poster'         => $poster,
            'product_count'  => $product_count,
            'activeSelected' => $activeSelected,
        ]);
    }
    protected function applyOrderByFromRequest($query, $request)
    {
        if ($request->has('sort_by')) {
            $sort_by     = str_replace('ending', '', $request->get('sort_by'));
            $sort_by     = str_replace('created', 'created_at', $sort_by);
            $orderBy     = explode('-', $sort_by);
            $check_key   = ['name', 'price', 'created_at'];
            $check_value = ['asc', 'desc'];

            if (count($orderBy) > 0) {
                if (in_array($orderBy[0], $check_key) && in_array($orderBy[1], $check_value)) {

                    $query = $query->orderBy($orderBy[0], $orderBy[1]);
                }
            }
        } else {
            $query = $query->orderBy('id', 'desc');
        }
        return $query;
    }
}
