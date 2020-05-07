<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function show()
    {
        return view('pages.checkout');
    }
}
