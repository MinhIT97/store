<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\sizeableRepository;
use App\Entities\Sizeable;
use App\Validators\SizeableValidator;

/**
 * Class SizeableRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class SizeableRepositoryEloquent extends BaseRepository implements SizeableRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Sizeable::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return SizeableValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
