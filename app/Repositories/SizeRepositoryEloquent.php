<?php

namespace App\Repositories;

use App\Entities\Size;
use App\Repositories\SizeRepository;
use App\Validators\SizeValidator;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class SizeRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class SizeRepositoryEloquent extends BaseRepository implements SizeRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Size::class;
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

        return SizeValidator::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

}
