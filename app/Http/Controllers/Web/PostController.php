<?php

namespace App\Http\Controllers\Web;

use App\Entities\Post;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        $blogs = Post::published()->paginate(10);
        return view(
            'pages.blog',
            [
                'blogs' => $blogs,
            ]
        );
    }
}
