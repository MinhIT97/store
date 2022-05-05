<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MenuCreateRequest;
use App\Http\Requests\MenuUpdateRequest;
use App\Repositories\MenuRepository;

class MenuController extends Controller
{
    protected $menuRepository;
    public function __construct(MenuRepository $menuRepository)
    {
        $this->menuRepository = $menuRepository;
        $this->entity         = $menuRepository->getEntity();
    }

    public function index()
    {
        $menus = $this->entity->published()->orderBy('order_by', 'desc')->latest()->get();

        return view('admin.pages.menus.menu-list', [
            'menus' => $menus,
        ]);
    }

    public function showStore()
    {
        $menus = $this->entity->published()->orderBy('order_by', 'desc')->latest()->get();
        return view('admin.pages.menus.create-menu', [
            'menus' => $menus,
        ]);
    }
    public function store(MenuCreateRequest $request)
    {
        $data = $request->all();
        $menu = $this->menuRepository->create($data);
        if (!$menu) {
            return redirect()->back()->with('error', 'Create menu error');
        }

        return redirect()->back()->with('sucsess', 'Create menu ' . $menu->label . ' sucsess');
    }
    public function showUpdate($id)
    {
        $menu  = $this->entity->findOrFail($id);
        $menus = $this->entity->published()->orderBy('order_by', 'desc')->latest()->get();
        return view('admin.pages.menus.edit-menu', [
            'menus' => $menus,
            'menu'  => $menu,
        ]);
    }
    public function update(MenuUpdateRequest $request, $id)
    {
        $data = $request->all();
        $menu = $this->entity->findOrFail($id);
        $menu = $menu->update($data);
        if ($menu) {

            $menu = $this->entity->findOrFail($id);
            return redirect()->back()->with('sucsess', 'update menu ' . $menu->label . ' sucsess');
        }
        return redirect()->back()->with('error', 'update menu ' . $menu->label . ' error');
    }
    public function destroy($id)
    {
        $menu = $this->entity->findOrFail($id);
        $menu->delete();
        if ($menu) {
            return redirect()->route('menus')->with('sucsess', 'delete menu ' . $menu->label . ' sucsess');
        }
        return redirect()->route('menus')->with('error', 'delete menu ' . $menu->label . ' error');
    }
}
