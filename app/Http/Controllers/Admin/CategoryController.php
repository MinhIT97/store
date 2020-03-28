<?php

namespace App\Http\Controllers\Admin;

use App\Entities\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\categoryCreateRequest;
use App\Http\Requests\categoryUpdateRequest;

class CategoryController extends Controller
{
    public function index()
    {
        $categoies = Category::get();

        return view(
            'admin.pages.categories.categories-list',
            [
                'categories' => $categoies,
            ]
        );
    }

    public function viewCreate()
    {
        $categoies = Category::get();
        return view('admin.pages.categories.create-category', [
            'categories' => $categoies,
        ]);
    }
    public function createCategory(categoryCreateRequest $request)
    {
        if (Category::create($request->all())) {
            return redirect()->back()->with('sucsess', 'Thêm danh mục thành công');
        } else {
            return redirect()->back()->with('error', 'Them danh mục thất bại');
        }
    }

    public function viewEdit($id)
    {

        $categoies = Category::get();
        $category  = Category::find($id);
        if (!$category) {
            return view('admin.pages.samples.error-404');
        }
        return view('admin.pages.categories.edit-category', [
            'category'   => $category,
            'categories' => $categoies,
        ]);
    }
    public function editCategory(categoryUpdateRequest $request, $id)
    {
        $category = Category::find($id);
        $request->all();
        if ($category->update($request->all())) {
            return redirect()->route('categories')->with('sucsess', 'Thêm danh mục thành công');
        } else {
            return redirect()->back()->with('error', 'Them danh mục thất bại');
        }
    }
}
