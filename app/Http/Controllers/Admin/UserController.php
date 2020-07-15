<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AttachRoleRequest;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Repositories\RoleRepository;
use App\Repositories\UserRepository;
use App\Traits\Search;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    use Search;
    protected $userRepository;
    protected $roleRepository;
    public function __construct(UserRepository $userRepository, RoleRepository $roleRepository)
    {
        $this->userRepository = $userRepository;
        $this->userEntity     = $userRepository->getEntity();
        $this->roleEntity     = $roleRepository->getEntity();
    }
    public function index(Request $request)
    {
        $this->authorize('viewAny', User::class);

        $query = $this->userEntity->query();
        $query = $this->applyConstraintsFromRequest($query, $request);
        $query = $this->applySearchFromRequest($query, ['name', 'email'], $request);
        $query = $this->applyOrderByFromRequest($query, $request);
        $users = $query->paginate(10);

        $users->setPath(url()->current() . '?search=' . $request->get('search'));

        return view('admin.index', [
            'users' => $users,
        ]);
    }
    public function viewStore()
    {
        $roles = $this->roleEntity->get();
        return view('admin.pages.register', [
            'roles' => $roles,
        ]);
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
        $user                 = $this->userEntity->create($data);

        if ($request->has('role_ids')) {
            $ids      = $request->role_ids;
            $role_ids = explode(',', $ids);
            $user->roles()->attach($role_ids);
        }

        if (!$user) {
            return redirect()->back()->with('error', 'Thêm tài khoản không thành công');
        }
        return redirect()->route('users.show')->with('sucsess', 'Thêm tài khoản' . $request->name . 'thành công');
    }
    public function viewEditUser($id)
    {
        $user = $this->userEntity->findOrFail($id);

        if (!$user->roles->isEmpty()) {
            $role_ids = collect($user->roles->toArray())->pluck('id');

            $role_ids = $role_ids->all();

        } else {
            $role_ids = [];
        }

        $roles = $this->roleEntity->get();

        return view('admin.pages.user.edit-user', [
            'user'     => $user,
            'roles'    => $roles,
            'role_ids' => $role_ids,
        ]);
    }

    public function editUser(UserUpdateRequest $request, $id)
    {
        $user = $this->userEntity->findOrFail($id);

        if ($request->hasFile('avatar')) {

            $request->avatar->move(base_path('/public/uploads'), $request->avatar->getClientOriginalName());
            $data = $request->except('_token');

            $data['avatar'] = $request->avatar->getClientOriginalName();
        } else {
            $data = $request->except(['_token', 'role_ids']);
        }
        // $request->offsetUnset('_token');
        if ($request->role_ids) {
            $ids      = $request->role_ids;
            $role_ids = explode(',', $ids);
            $user->roles()->sync($role_ids);
        }

        if ($user->update($data)) {
            return redirect()->route('users.show')->with('sucsess', 'Update ' . $request->name . ' sucsess');
        } else {
            return redirect()->back()->with('success', 'update' . $request->name . 'thất bại');
        }
    }
    public function destroy($id)
    {
        $user = $this->userEntity->find($id);
        if ($user->delete()) {
            return redirect()->back()->with('sucsess', 'Delete sucsess');
        }
        return redirect()->back()->with('errow', 'Delete errow');
    }

    public function viewProfile($id)
    {
        $user = $this->userEntity->find($id);
        return view('admin.pages.user.profile', [
            'user' => $user,
        ]);
    }

    public function attachRoles(AttachRoleRequest $request, $id)
    {
        $data = $request->all();
        $user = $this->userEntity->findOrFail($id);
        $user->roles()->attach($data['role_id']);
    }
}
