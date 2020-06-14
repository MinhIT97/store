<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserUpdateRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware(['auth','verified']);
    // }
    public function index(Request $request)
    {
        $id   = Auth::user()->id;
        $user = User::find($id);

        return view('pages.profile', [
            'user' => $user,
        ]);
    }
    public function update(UserUpdateRequest $request)
    {
        $id = Auth::user()->id;

        $data = $request->all();

        $user = User::findOrFail($id);

        $user->update($data);

        return redirect()->back()->with('success', 'Update user sucsess');
    }

    public function test()
    {
        return view('mail.order-mail');
    }
}
