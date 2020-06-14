<?php

namespace App\Repositories;

use App\Entities\Brand;
use App\Entities\Product;
use App\Repositories\brandRepository;
use App\Validators\BrandValidator;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class BrandRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class BrandRepositoryEloquent extends BaseRepository implements BrandRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Brand::class;
    }

    public function getEntity()
    {
        return $this->model;
    }

    public function getProduct($id)
    {
        $product = Product::where('brand_id', $id)->paginate(20);
        return $product;

    }
    /**
     * Specify Validator class name
     *
     * @return mixed
     */
    public function validator()
    {

        return BrandValidator::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

}
