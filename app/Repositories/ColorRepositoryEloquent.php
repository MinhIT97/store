<?php

namespace App\Repositories;

use App\Entities\Color;
use App\Repositories\ColorRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class ColorRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class ColorRepositoryEloquent extends BaseRepository implements ColorRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Color::class;
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
