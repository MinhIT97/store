<?php

namespace App\Entities;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
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
        "status"
    ];
    public function sluggable():array
    {
        return [
            'slug' => [
                'source' => 'name',
            ],
        ];
    }

    public function posts()
    {
        return $this->morphedByMany(Post::class, 'categoryable');
    }
    public function products()
    {
        return $this->morphedByMany(Product::class, 'categoryable');
    }

    public function getDate()
    {
        return Carbon::parse($this->created_at)->format('d/m/Y');
    }
    public function getDateUpdate()
    {
        return Carbon::parse($this->updated_at)->format('d/m/Y');
    }


}
