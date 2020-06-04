<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserCreateRequest;
use App\Traits\Search;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    use Search;
    public function index(Request $request)
    {

        $query = User::query();
        $query = $this->applyConstraintsFromRequest($query, $request);
        $query = $this->applySearchFromRequest($query, ['name', 'email'], $request);
        $query = $this->applyOrderByFromRequest($query, $request);
        $users = $query->paginate(10);
        return view('admin.index', [
            'users' => $users,
        ]);
    }
    public function viewStore()
    {

        return view('admin.pages.register');
    }

    public function store(UserCreateRequest $request)
    {
        if ($request->hasFile('avatar')) {
            $request->avatar->move(base_path('/public/uploads'), $request->avatar->getClientOriginalName());
            $data           = $request->all();
            $data['avatar'] = $request->avatar->getClientOriginalName();
        } else {
            $data = $request->all();
        }
        $data['password']     = Hash::make($request->password);
        $data['verify_token'] = Str::random(32);
        $user                 = User::create($data);

        if (!$user) {
            return redirect()->back()->with('error', 'Thêm tài khoản không thành công');
        }
        return redirect()->route('users.show')->with('sucsess', 'Thêm tài khoản' . $request->name . 'thành công');
    }
    public function viewEditUser(Request $request)
    {
        $user = User::where('id', $request->id)->first();

        if (!$user) {
            return view('admin..pages.samples.error-404');
        }

        return view('admin.pages.user.edit-user', [
            'user' => $user,
        ]);
    }

    public function editUser(Request $request)
    {
        $user = User::where('id', $request->id);

        if ($request->hasFile('avatar')) {
            $request->avatar->move(base_path('/public/uploads'), $request->avatar->getClientOriginalName());
            $data           = $request->except('_token');
            $data['avatar'] = $request->avatar->getClientOriginalName();
        } else {
            $data = $request->except('_token');
        }
        // $request->offsetUnset('_token');
        if (count($user->get()) === 0) {
            return view('error-404');
        }

        if ($user->update($data)) {
            return redirect()->route('users.show')->with('sucsess', 'update ' . $request->name . ' sucsess');
        } else {
            return redirect()->back()->with('success', 'update' . $request->name . 'thất bại');
        }
    }
    public function destroy($id)
    {
        $user = User::find($id);
        if ($user->delete()) {
            return redirect()->back()->with('sucsess', 'Delete sucsess');
        }
        return redirect()->back()->with('errow', 'Delete errow');
    }

    public function viewProfile($id)
    {
        $user = User::find($id);
        return view('admin.pages.user.profile', [
            'user' => $user,
        ]);
    }
}
