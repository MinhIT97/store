<?php

namespace App\Entities;

use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use Illuminate\Support\Str;


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
    const PENĐING  = 0;
    const PUBLISHED = 1;
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
        return $this->morphToMany(Category::class, 'categoryable');
    }
    public function sizes()
    {
        return $this->morphToMany(Size::class, 'sizeable');
    }
    public function getDate()
    {
        return Carbon::parse($this->created_at)->format('d/m/Y');
    }

    public function imgaes()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function brand()
    {
        return $this->hasOne(Brand::class);
    }
    public function scopePublished($query)
    {
        $query->where('status', Product::PUBLISHED);
    }
    public function getLimitName($limit)
    {
        return Str::limit($this->name, $limit);
    }
}
