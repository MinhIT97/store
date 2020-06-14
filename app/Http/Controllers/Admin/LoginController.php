<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }
    public function post_login(request $req)
    {

        //      $this->validate($req,[
        //          'email'=> 'required|email',
        //          'password'=>'required'

        //      ],[
        //          'required'=>'sai mk',
        //         'email'=>'dinh dang sai'

        //      ]);
        if (Auth::attempt($req->only('email', 'password'), $req->has('remember'))) {

            return redirect()->route('users.show');
        } else {
            return redirect()->back()->with('error', 'Tài khoản không không đúng');
        }
    }
}
