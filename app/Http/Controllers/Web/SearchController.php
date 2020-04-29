<?php

namespace App\Http\Controllers\Web;

use App\Entities\Post;
use App\Entities\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(Request $request)
    {
        // $this->insertSeoMetaFields();

        $query    = Product::query();
        $query    = $this->applySearchFromRequest($query, ['name'], $request);
        $products = $query->orderBy('id', 'desc')->limit(12)->get();


        $blogs = Post::query();
        $blogs = $this->applySearchFromRequest($blogs,['title'],$request);
        $blogs = $blogs->where('type','blogs')->published()->limit(12)->get();



        return view('pages.search', [
            'products' => $products,
            'blogs'   => $blogs,
        ]);
    }

    protected function applySearchFromRequest($query, array $fields, Request $request)
    {
        if ($request->has('search')) {
            $search = $request->get('search');
            if (count($fields)) {
                $query = $query->where(function ($q) use ($fields, $search) {
                    foreach ($fields as $key => $field) {
                        $q = $q->orWhere($field, 'like', "%{$search}%");
                    }
                });
            }
        }
        return $query;
    }
}
