<?php

namespace App\Http\Controllers\Web;

use App\Entities\Poster;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $poster = Poster::where('id', 1)->where('type', 'home')->latest()->published()->first();
        return view('index', [
            'poster' => $poster,
        ]);
    }
}
