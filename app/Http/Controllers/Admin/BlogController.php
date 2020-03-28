<?php

namespace App\Http\Controllers\Admin;

use App\Entities\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Post::get();
        return view('admin.pages.blogs.blog-list',[
            'blogs' => $blogs,
        ]);
    }
}
