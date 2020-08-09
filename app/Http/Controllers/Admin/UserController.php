<?php

namespace App\Http\Controllers\Admin;

use App\Entities\Province;
use App\Exports\UserExports;
use App\Http\Controllers\Controller;
use App\Http\Requests\AttachRoleRequest;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Repositories\RoleRepository;
use App\Repositories\UserRepository;
use App\Services\ExcelService;
use App\Traits\Search;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    use Search;
    protected $userRepository;
    protected $roleRepository;
    protected $userExports;
    protected $excelService;
    public function __construct(UserRepository $userRepository, ExcelService $excelService, RoleRepository $roleRepository, UserExports $userExports)
    {
        $this->userRepository = $userRepository;
        $this->userEntity     = $userRepository->getEntity();
        $this->roleEntity     = $roleRepository->getEntity();
        $this->excelService   = $excelService;
        $this->exports        = $userExports;
    }
    public function exportExcel(Request $request)
    {
        $query = $this->userEntity->query();
        $url   = $request->url;
        $url   = explode('?', $url);
        $query = $this->excelService->FiledSearchExcel($url, $query);
        $users = $query->get();
        Excel::store(new $this->exports($users), 'users.xlsx', 'excel');

        return Response()->download(public_path('exports/users.xlsx'));
    }
    public function index(Request $request)
    {
        $this->authorize('viewAny', User::class);
        $query = $this->userEntity->query();
        $query = $this->getFromDate($request, $query);
        $query = $this->getToDate($request, $query);
        $query = $this->applyConstraintsFromRequest($query, $request);
        $query = $this->applySearchFromRequest($query, ['name', 'email'], $request);
        $query = $this->applyOrderByFromRequest($query, $request);
        $query = $query->where('level', 1);
        $users = $query->paginate(10);
        $users->setPath(url()->current() . '?search=' . $request->get('search'));

        return view('admin.index', [
            'users' => $users,
        ]);
    }
    public function customer(Request $request)
    {
        $query = $this->userEntity->query();
        $query = $this->applyConstraintsFromRequest($query, $request);
        $query = $this->getFromDate($request, $query);
        $query = $this->getToDate($request, $query);
        $query = $this->applySearchFromRequest($query, ['name', 'email'], $request);
        $query = $this->applyOrderByFromRequest($query, $request);
        $query = $query->where('level', 0);
        $users = $query->paginate(10);

        $users->setPath(url()->current() . '?search=' . $request->get('search'));

        return view('admin.pages.user.customer', [
            'users' => $users,
        ]);
    }
    public function viewStore()
    {
        $province = Province::where('status', Province::STATUS_ACTIVE)->get();
        $roles    = $this->roleEntity->get();
        return view('admin.pages.register', [
            'roles'    => $roles,
            'province' => $province,
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
        $user     = $this->userEntity->findOrFail($id);
        $province = Province::where('status', Province::STATUS_ACTIVE)->get();
        if (!$user->roles->isEmpty()) {
            $role_ids = collect($user->roles->toArray())->pluck('id');

            $role_ids = $role_ids->all();
        } else {
            $role_ids = [];
        }
        $district = $user->getDistrict();
        $roles    = $this->roleEntity->get();

        return view('admin.pages.user.edit-user', [
            'user'     => $user,
            'roles'    => $roles,
            'role_ids' => $role_ids,
            'province' => $province,
            'district' => $district,
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
            return redirect()->back()->with('sucsess', 'Update ' . $request->name . ' sucsess');
        } else {
            return redirect()->back()->with('error', 'update' . $request->name . 'thất bại');
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
