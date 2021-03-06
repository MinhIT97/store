<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class FontController extends Controller
{
    public function iconShow()
    {
        return view('admin.pages.icons.mdi');
    }
    public function formShow()
    {
        return view('admin.pages.forms.basic_elements');
    }
    public function chartShow()
    {
        return view('admin.pages.charts.chartjs');
    }
    public function tableShow()
    {
        return view('admin.pages.tables.basic-table');
    }
    public function button()
    {
        return view('admin.pages.ui-features.buttons');
    }

}
