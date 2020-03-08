<?php

namespace App\Http\Controllers\Web;

use App\Entities\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function webUser()
    {
        return view("pages.login");
    }

    public function webViewRegister()
    {
        return view('pages.create-account');
    }

    public function webRegister(Request $request)
    {

        $request->merge(['password' => bcrypt($request->password)]);

        if (User::create($request->all())) {
            return redirect()->route('home')->with('sucsess', 'Thêm tài khoản' . $request->name . 'thành công');
        } else {
            return redirect()->back()->with('error', 'Thêm tài khoản không thành công');
        }
    }
}
