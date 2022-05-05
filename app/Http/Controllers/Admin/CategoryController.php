<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryCreateRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Repositories\CategoryRepository;
use App\Repositories\ProductRepository;
use App\Traits\Search;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    use Search;
    protected $repository;
    public function __construct(CategoryRepository $repository, ProductRepository $productRepository)
    {
        $this->repository     = $repository;
        $this->entity         = $repository->getEntity();
        $this->entity_product = $productRepository->getEntity();
    }

    public function index(Request $request)
    {
        $path_items = collect(explode('/', $request->path()));
        $type       = $path_items->last();

        $query     = $this->entity->query();
        $query     = $query->where('type', $type);
        $query     = $this->applyConstraintsFromRequest($query, $request);
        $query     = $this->applySearchFromRequest($query, ['name'], $request);
        $query     = $this->applyOrderByFromRequest($query, $request);
        $categoies = $query->withCount('posts', 'products')->paginate(20);
        $categoies->setPath(url()->current() . '?search=' . $request->get('search'));

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

        $path_items = collect(explode('/', $request->path()));
        $type       = $path_items->last();

        $data         = $request->all();
        $data['type'] = $type;
        if ($this->entity->create($data)) {
            return redirect()->back()->with('sucsess', 'Create category sucsess');
        } else {
            return redirect()->back()->with('error', 'Create category error');
        }
    }

    public function showProducts($id)
    {
        $produts = $this->entity->findOrFail($id)->products()->paginate(20);
        return view('admin.pages.categories.category-show-products', [
            'products' => $produts,
        ]);
    }

    public function showPosts($id)
    {
        $blogs = $this->entity->findOrFail($id)->posts()->paginate(20);
        return view('admin.pages.categories.category-show-blogs', [
            'blogs' => $blogs,
        ]);
    }

    public function showEdit($id)
    {
        $categoies = $this->entity->get();
        $category  = $this->entity->findOrFail($id);
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
        $category = $this->entity->findOrFail($id);
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

        $category->products()->detach();

        if ($delete) {
            return redirect()->back()->with('sucsess', 'Delete Category sucsess');
        }
        return redirect()->back()->with('error', 'Delete Category error');
    }
}
