<?php

namespace App\Http\Controllers\Web;

use App\Entities\Poster;
use App\Entities\Product;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $poster              = Poster::where('type', 'home')->latest()->published()->first();
        $new_sesion          = Poster::where('type', 'newsesion')->latest()->published()->limit(4)->get();

        $product_accessories = Product::where('type', 'accessories')->published()->hots()->limit(7)->get();
        $product_men         = Product::where('type', 'men')->published()->hots()->limit(7)->get();
        $product_women       = Product::where('type', 'women')->published()->hots()->limit(7)->get();
        return view('index', [
            'poster'              => $poster,
            'product_accessories' => $product_accessories,
            'product_men'         => $product_men,
            'product_women'       => $product_women,
            'new_sesion'          => $new_sesion,
        ]);
    }
}
