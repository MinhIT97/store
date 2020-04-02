<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\BrandRepository;

class BrandController extends Controller
{
    protected $repository;
    public function __construct(BrandRepository $repository)
    {
        $this->repository = $repository;
        $this->entity     = $repository->getEntity();
    }

    public function index()
    {
        $brands = $this->entity->withCount('products')->paginate(10);
        return view(
            'admin.pages.brand.brand-list',
            [
                'brands' => $brands,
            ]
        );
    }

    public function destroy($id)
    {
        $brand = $this->entity->find($id);
        if ($brand) {
            $brand->delete();
            return redirect()->back()->with('sucsess', 'Dlete brand sucsess');
        }
        return view('admin.pages.samples.error-404.blade.php');
    }

    public function detail($id)
    {
        $category_product = $this->repository->getProduct($id);

        return view('admin.pages.brand.brand-detail', [
            'category_product' => $category_product,
        ]);
    }
}
