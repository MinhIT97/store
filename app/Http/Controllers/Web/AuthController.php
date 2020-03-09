<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserCreateRequest;
use App\User;

class AuthController extends Controller
{

    public function webUser()
    {
        return view("auth.login");
    }

    public function webViewRegister()
    {
        return view("auth.register");
    }

    public function webRegister(UserCreateRequest $request)
    {

        $request->merge(['password' => bcrypt($request->password)]);

        if (User::create($request->all())) {
            return redirect()->route('verification.verify')->with('sucsess', 'Thêm tài khoản' . $request->name . 'thành công');
        } else {
            return redirect()->back()->with('error', 'Thêm tài khoản không thành công');
        }
    }
    public function verify()
    {
        return view("auth.verify");
    }
}
