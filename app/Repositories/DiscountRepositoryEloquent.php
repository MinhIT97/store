<?php

namespace App\Repositories;

use App\Entities\Discount;
use App\Repositories\DiscountRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class DiscountRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class DiscountRepositoryEloquent extends BaseRepository implements DiscountRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Discount::class;
    }
    public function getEntity()
    {
        return $this->model;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

}
