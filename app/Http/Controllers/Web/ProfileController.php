<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware(['auth','verified']);
    // }
    public function index(Request $requet)
    {

        $user = User::where('id', $requet->id)->get();


        return view('pages.profile');
    }
}
