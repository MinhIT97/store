<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandCreateRequest;
use App\Http\Requests\BrandUpdateRequest;
use App\Repositories\BrandRepository;
use App\Traits\Search;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    use Search;
    protected $repository;
    public function __construct(BrandRepository $repository)
    {
        $this->repository = $repository;
        $this->entity     = $repository->getEntity();
    }

    public function index(Request $request)
    {
        $query = $this->entity->query();
        $query = $this->applyConstraintsFromRequest($query, $request);
        $query = $this->applySearchFromRequest($query, ['name'], $request);
        $query = $this->applyOrderByFromRequest($query, $request);

        $brands = $query->withCount('products')->paginate(10);

        $brands->setPath(url()->current() . '?search=' . $request->get('search'));

        return view(
            'admin.pages.brand.brand-list',
            [
                'brands' => $brands,
            ]
        );
    }

    public function showStore()
    {
        return view('admin.pages.brand.brand-create');
    }
    public function store(BrandCreateRequest $request)
    {
        $data = $request->all();

        if ($this->entity->create($data)) {
            return redirect()->back()->with('sucsess', 'Create brand sucsess');
        }
        return redirect()->back()->with('arrow', 'Create brand errow');
    }

    public function showUpdate($id)
    {
        $brand = $this->entity->findOrFail($id);

        return view('admin.pages.brand.brand-edit', [
            'brand' => $brand,
        ]);
    }
    public function update(BrandUpdateRequest $request, $id)
    {
        $brand       = $this->entity->findOrFail($id);
        $data        = $request->all();
        $brand->slug = null;
        if ($brand) {
            $brand->slug = null;
            $brand->update($data);
            return redirect()->route('brand.show')->with('sucsess', 'update brand sucsess');
        }
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
        $brand = $this->repository->find($id);

        $brand_product = $this->repository->getProduct($id);

        return view('admin.pages.brand.brand-detail', [
            'brand_product' => $brand_product,
            'brand'         => $brand,
        ]);
    }
}
