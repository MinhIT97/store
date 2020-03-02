<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\attributeRepository;
use App\Entities\Attribute;
use App\Validators\AttributeValidator;

/**
 * Class AttributeRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class AttributeRepositoryEloquent extends BaseRepository implements AttributeRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Attribute::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return AttributeValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
