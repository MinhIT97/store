<?php

namespace App\Repositories;

use App\Entities\Poster;
use App\Repositories\PosterRepository;
use App\Validators\PosterValidator;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class PosterRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class PosterRepositoryEloquent extends BaseRepository implements PosterRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Poster::class;
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

        return PosterValidator::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

}
