<?php

namespace App\Http\Controllers\Admin;

use App\Entities\Attribute;
use App\Entities\Brand;
use App\Entities\Category;
use App\Entities\Color;
use App\Entities\Image;
use App\Entities\Product;
use App\Entities\Size;
use App\Http\Controllers\Controller;
use App\Http\Requests\AttributeCreateRequest;
use App\Http\Requests\ProductCreateRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Repositories\AttributeRepository;
use App\Repositories\ProductRepository;
use App\Traits\Search;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    use Search;
    protected $repository;
    public function __construct(ProductRepository $repository, AttributeRepository $attributeRepository)
    {
        $this->repository       = $repository;
        $this->entity           = $repository->getEntity();
        $this->entity_attribute = $attributeRepository->getEntity();
    }
    public function index()
    {
        return view('admin.pages.products.index');
    }

    public function show(Request $request, $type)
    {
        $query    = $this->entity->query();
        $query    = $this->applyConstraintsFromRequest($query, $request);
        $query    = $this->applySearchFromRequest($query, ['name', 'price'], $request);
        $query    = $this->applyOrderByFromRequest($query, $request);
        $products = $query->where('type', $type)->withCount('attributes', 'orderItems')->orderBY('id', 'DESC')->paginate(20);
        $products->setPath(url()->current() . '?search=' . $request->get('search'));

        return view('admin.pages.products.product-list', [
            'products' => $products,
        ]);
    }

    public function showStore()
    {
        $categories = Category::get();
        $brands     = Brand::get();
        $sizes      = Size::get();
        return view(
            'admin.pages.products.product-create',
            [
                'categories' => $categories,
                'brands'     => $brands,
                'sizes'      => $sizes,
            ]
        );
    }
    public function store(ProductCreateRequest $request)
    {

        if ($request->hasFile('thumbnail')) {
            $request->thumbnail->move(base_path('/public/uploads'), $request->thumbnail->getClientOriginalName());
            $data              = $request->all();
            $data['thumbnail'] = $request->thumbnail->getClientOriginalName();
        } else {
            $data = $request->all();
        }
        $ids        = $request->categories;
        $categories = explode(',', $ids);
        $size_ids   = $request->sizes;
        $sizes      = explode(',', $size_ids);

        // if ($request->hasFile('media')) {
        //     foreach ($request->media as $key ) {
        //         $filename =  $key->getClientOriginalName();
        //        print_r($filename);
        //     }
        // }
        // dd($request->hasFile('media'));
        $product = $this->entity->create($data);

        if ($product) {

            $product->categories()->attach($categories);
            $product->sizes()->attach($sizes);

            if ($request->hasFile('media')) {
                foreach ($request->media as $key) {
                    $filename = $key->getClientOriginalName();

                    $key->move(base_path('/public/uploads'), $filename);
                    $product->imagaes()->updateOrCreate([
                        'url' => $filename,
                    ]);
                }
            }

            return redirect()->back()->with('sucsess', 'Thêm Sản phẩm thành công');
        }
        return redirect()->back()->with('errow', 'Thêm sản phẩm thất bại');
    }

    public function showEdit($id)
    {

        $categories = Category::get();
        $brands     = Brand::get();
        $sizes      = Size::get();
        $product    = Product::with('categories', 'sizes', 'imagaes')->find($id);

        return view(
            'admin.pages.products.edit-product',
            [
                'product'    => $product,
                'categories' => $categories,
                'brands'     => $brands,
                'sizes'      => $sizes,
            ]
        );
    }
    public function editProduct($id, ProductUpdateRequest $request)
    {

        $product = $this->repository->find($id);

        if ($request->hasFile('thumbnail')) {
            $request->thumbnail->move(base_path('/public/uploads'), $request->thumbnail->getClientOriginalName());
            $data              = $request->all();
            $data['thumbnail'] = $request->thumbnail->getClientOriginalName();
            $data['type']      = 'blog';
        } else {
            $data = $request->all();
        }
        if (!$request->hot) {
            $data['hot'] = 0;
        }
        if ($product) {
            $product->slug = null;
            $update        = $product->update($data);
            $ids           = $request->categories;
            $categories    = explode(',', $ids);
            $size_ids      = $request->sizes;
            $sizes         = explode(',', $size_ids);

            if ($update) {
                $product->categories()->sync($categories);
                $product->sizes()->sync($sizes);

                if ($request->hasFile('media')) {
                    foreach ($request->media as $key) {
                        $filename = $key->getClientOriginalName();

                        $key->move(base_path('/public/uploads'), $filename);
                        $product->imagaes()->updateOrCreate([
                            'url' => $filename,
                        ]);
                    }
                }
            }
            return redirect()->back()->with('sucsess', 'Update sucsess');
        }

        return view('admin.pages.samples.error-404');
    }

    public function destroy($id)
    {
        $product = $this->entity->findOrfail($id);
        if (!$product) {
            return view('admin.pages.samples.error-404');
        }

        $product->delete();

        $product->imagaes()->delete();
        $product->sizes()->detach();
        $product->categories()->detach();
        return redirect()->back()->with('sucsess', 'Delete product sucsess');
    }

    public function destroyMedias($id, $id_medias)
    {
        $medias = Image::findOrfail($id_medias);
        $medias->delete();
        return redirect()->back()->with('sucsess', 'Delete medias sucsess');
    }

    public function showAttribute($id)
    {
        $attributes = Attribute::where('product_id', $id)->with('color')->get();

        $product = $this->entity->find($id);

        return view('admin.pages.products.attribute.attribute-list', [
            'attributes' => $attributes,
            'product'    => $product,
        ]);
    }

    public function showStoreAttribute($id)
    {
        $product = $this->entity->with('attributes', 'sizes')->find($id);
        $colors  = Color::get();
        return view('admin.pages.products.attribute.create-attribute', [
            'product' => $product,
            'colors'  => $colors,
        ]);
    }

    public function storeAttribute(AttributeCreateRequest $request)
    {

        $product_current_quantity = $this->checkQuantityProductAttibute($request);

        if (!$product_current_quantity) {
            return redirect()->back()->with('errow', 'Current quantity exceed current quantity Product');
        }

        $data = $request->all();

        $attribute = Attribute::create($data);

        if ($attribute) {
            return redirect()->back()->with('sucsess', 'Add attribute sucsess');
        }
    }

    public function sumQuantityAttribute($request)
    {
        $product_id           = $request->product_id;
        $sumQuantityAttribute = $this->entity_attribute->where('product_id', $product_id)->get();
        $sumQuantityAttribute = $sumQuantityAttribute->sum('current_quantity');
        return $sumQuantityAttribute;
    }

    public function checkQuantityProductAttibute($request)
    {
        $sumQuantityAttribute = $this->sumQuantityAttribute($request);
        $product_id           = $request->product_id;

        $product                  = $this->entity->find($product_id);
        $product_current_quantity = $product->current_quantity;
        $sumQuantity              = $request->current_quantity + $sumQuantityAttribute;

        if ($sumQuantity <= $product_current_quantity) {
            return $product_current_quantity;
        }
        return false;
    }

    public function destroyAttribute($id)
    {
        $attribute = Attribute::findOrfail($id)->delete();
        if ($attribute) {
            return redirect()->back()->with('sucsess', 'Delete attribute sucsess');
        }

        return redirect()->back()->with('errow', 'Delete attribute errow');
    }
}
