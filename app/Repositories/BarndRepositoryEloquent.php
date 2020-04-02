<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\barndRepository;
use App\Entities\Barnd;
use App\Validators\BarndValidator;

/**
 * Class BarndRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class BarndRepositoryEloquent extends BaseRepository implements BarndRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Barnd::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return BarndValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
