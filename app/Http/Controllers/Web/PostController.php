<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        return view('pages.blog');
    }
}
