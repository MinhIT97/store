<?php

namespace App\Http\Controllers\Admin;

use App\Entities\Role;
use App\Http\Controllers\Controller;
use App\Http\Requests\AttachRoleRequest;
use App\Http\Requests\RolesRequest;
use App\Http\Requests\RoleUpdateRequest;
use App\Repositories\RoleRepository;

class RoleController extends Controller
{
    protected $roleRepository;
    public function __construct(RoleRepository $roleRepository)
    {
        $this->roleRepository = $roleRepository;
        $this->roleEntity     = $roleRepository->getEntity();
    }
    public function index()
    {
        $roles = $this->roleEntity->get();

        // $this->authorize('create', Role::class);
        $this->authorize('viewAny', Role::class);

        return view('admin.pages.roles.roles', [
            'roles' => $roles,
        ]);
    }

    public function showStore()
    {
        $this->authorize('create', Role::class);
        return view('admin.pages.roles.create-role');
    }
    public function store(RolesRequest $request)
    {
        $data = $request->all();
        $this->roleRepository->create($data);
        return redirect()->back()->with('sucsess', 'Create role sucsess');
    }

    public function show($id)
    {
        $role = $this->roleEntity->findOrFail($id);
        return view('admin.pages.roles.show', [
            'role' => $role,
        ]);

    }

    public function update(RoleUpdateRequest $request, $id)
    {
        $data = $request->all();
        $role = $this->roleEntity->findOrFail($id);
        $role->update($data);
        return redirect()->back()->with('sucsess', 'Update role sucsess');
    }

    public function destroy($id)
    {
        $role = $this->roleEntity->findOrFail($id);

        $role->delete();

        return redirect()->back()->with('sucsess', 'Delete role sucsess');

    }

}
