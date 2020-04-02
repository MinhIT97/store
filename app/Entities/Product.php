<?php

namespace App\Entities;

use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Product.
 *
 * @package namespace App\Entities;
 */
class Product extends Model implements Transformable
{
    use TransformableTrait, Sluggable, SluggableScopeHelpers;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "name",
        "quantity",
        "current_quantity",
        "price",
        "sale_price",
        "status",
        "category_id",
        "code",
        "thumbnail",
        "type",
        "brand_id",
    ];
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name',
            ],
        ];
    }
    public function categories()
    {
        return $this->morphToMany('App\Entities\Category', 'categoryable');
    }
    public function getDate()
    {
        return Carbon::parse($this->created_at)->format('d/m/Y');
    }

    public function brand()
    {
        return $this->hasOne(Brand::class);
    }
}
