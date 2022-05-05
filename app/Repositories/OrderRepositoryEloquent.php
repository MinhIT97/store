<?php

namespace App\Repositories;

use App\Entities\Order;
use App\Repositories\OrderRepository;
use App\Validators\OrderValidator;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class OrderRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class OrderRepositoryEloquent extends BaseRepository implements OrderRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Order::class;
    }
    public function getEntity()
    {
        return $this->model;
    }
    /**
     * Specify Validator class name
     *
     * @return mixed
     */
    public function validator()
    {

        return OrderValidator::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

}
