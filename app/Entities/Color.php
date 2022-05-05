<?php

namespace App\Entities;

use App\Traits\QueryTrait;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Color.
 *
 * @package namespace App\Entities;
 */
class Color extends Model implements Transformable
{
    use TransformableTrait, QueryTrait, Sluggable, SluggableScopeHelpers;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['color'];
    public function sluggable():array
    {
        return [
            'slug' => [
                'source' => 'color',
            ],
        ];
    }
}
