<?php

namespace App\Http\Controllers\Admin;

use App\Entities\Option;
use App\Http\Controllers\Controller;

class OptionController extends Controller
{
    public function index()
    {
        $options = Option::get();
        return view('admin.pages.option.option-list',
            [
                'options' => $options,
            ]
        );
    }

    public function showCreate()
    {

    }
}
