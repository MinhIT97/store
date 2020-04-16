<?php

namespace App\Http\Controllers\Web;

use App\Entities\Post;
use App\Entities\Poster;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs  = Post::published()->paginate(10);
        $poster = Poster::where('type', 'blogs')->latest()->published()->first();
        return view(
            'pages.blog',
            [
                'blogs'  => $blogs,
                'poster' => $poster,
            ]
        );
    }

    public function show(Request $request)
    {
        $blog = Post::where('slug', $request->slug)->published()->first();
        return view('pages.blog-detail', [
            'blog' => $blog,
        ]);

    }
}
