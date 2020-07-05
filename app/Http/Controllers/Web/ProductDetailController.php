<?php

namespace App\Http\Controllers\Web;

use App\Entities\Color;
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
        $product = $this->entity->where('type', $type)->where('slug', $slug)->with('sizes', 'attributes', 'imagaes')->first();
        $colors  = Color::get();

        $color_id = [];



        foreach ($product->attributes as $attribute) {
            array_push($color_id, $attribute->color_id);
        }
        $product_accessories = $this->entity->where('type', 'accessories')->published()->hots()->limit(4)->get();
        $product_men         = $this->entity->where('type', 'men')->published()->hots()->limit(4)->get();
        $product_women       = $this->entity->where('type', 'women')->published()->hots()->limit(4)->get();

        return view('pages.product-detail', [
            'product'             => $product,
            'colors'              => $colors,
            'color_id'            => $color_id,
            'product_accessories' => $product_accessories,
            'product_men'         => $product_men,
            'product_women'       => $product_women,
        ]);
    }
}
