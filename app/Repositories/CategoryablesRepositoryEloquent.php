<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\CategoryablesRepository;
use App\Entities\Categoryables;
use App\Validators\CategoryablesValidator;

/**
 * Class CategoryablesRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class CategoryablesRepositoryEloquent extends BaseRepository implements CategoryablesRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Categoryables::class;
    }



    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

}
