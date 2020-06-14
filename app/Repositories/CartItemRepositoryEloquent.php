<?php

namespace App\Repositories;

use App\Entities\CartItem;
use App\Repositories\CartItemRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class CartItemRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class CartItemRepositoryEloquent extends BaseRepository implements CartItemRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return CartItem::class;
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
