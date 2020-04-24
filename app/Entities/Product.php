<?php

namespace App\Entities;

use App\Traits\QueryTrait;
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
    use TransformableTrait, Sluggable, SluggableScopeHelpers, QueryTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    const PENĐING      = 0;
    const PUBLISHED     = 1;
    const HOTS =1;
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
        "content",
        "hot",
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
    public function attributes()
    {
        return $this->hasMany(Attribute::class, 'product_id');
    }

    public function imagaes()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function brand()
    {
        return $this->hasOne(Brand::class);
    }
    public function scopePublished($query)
    {
        $query->where('status', self::PUBLISHED);
    }
    public function scopeHots($query)
    {
        $query->where('hot', self::HOTS);
    }
}
