<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryCreateRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Repositories\CategoryRepository;

class CategoryController extends Controller
{
    protected $repository;
    public function __construct(CategoryRepository $repository)
    {
        $this->repository = $repository;
        $this->entity     = $repository->getEntity();
    }

    public function index()
    {
        $categoies = $this->entity->get();

        return view(
            'admin.pages.categories.categories-list',
            [
                'categories' => $categoies,
            ]
        );
    }

    public function showCreate()
    {
        $categoies = $this->entity->get();

        return view(
            'admin.pages.categories.create-category',
            [
                'categories' => $categoies,

            ]
        );
    }
    public function store(CategoryCreateRequest $request)
    {
        $data = $request->all();
        if ($this->entity->create($data)) {
            return redirect()->back()->with('sucsess', 'Create category sucsess');
        } else {
            return redirect()->back()->with('error', 'Create category error');
        }
    }

    public function showEdit($id)
    {

        $categoies = $this->entity->get();
        $category  = $this->entity->find($id);
        if (!$category) {
            return view('admin.pages.samples.error-404');
        }
        return view('admin.pages.categories.edit-category', [
            'category'   => $category,
            'categories' => $categoies,
        ]);
    }
    public function update(CategoryUpdateRequest $request, $id)
    {
        $category = $this->entity->find($id);
        $data     = $request->all();
        if ($category) {
            $category->slug = null;
            $category->update($data);
            return redirect()->route('categories.show')->with('sucsess', 'Category update sucsess');
        } else {
            return redirect()->back()->with('error', 'Category update error');
        }
    }
    public function destroy($id)
    {
        $category = $this->entity->find($id);
        $delete   = $category->delete();
        if ($delete) {
            return redirect()->route('categories.show')->with('sucsess', 'Delete Category sucsess');
        }
        return redirect()->back()->with('error', 'Delete Category error');
    }
}
