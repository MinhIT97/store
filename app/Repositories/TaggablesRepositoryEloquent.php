<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\TaggablesRepository;
use App\Entities\Taggables;
use App\Validators\TaggablesValidator;

/**
 * Class TaggablesRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class TaggablesRepositoryEloquent extends BaseRepository implements TaggablesRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Taggables::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return TaggablesValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

}
