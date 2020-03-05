<?php

namespace App\Entities;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Category.
 *
 * @package namespace App\Entities;
 */
class Category extends Model implements Transformable
{
    use TransformableTrait, Sluggable ,SluggableScopeHelpers;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "name",
        "type",
        "parent_id",
    ];
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name',
            ],
        ];
    }

}
