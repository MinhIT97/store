<?php

namespace App\Repositories;

use App\Entities\Option;
use App\Repositories\OptionRepository;
use App\Validators\OptionValidator;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class OptionRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class OptionRepositoryEloquent extends BaseRepository implements OptionRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Option::class;
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

        return OptionValidator::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

}
