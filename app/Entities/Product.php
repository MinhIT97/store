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
    const HOTS          = 1;
    protected $fillable = [
        "name",
        "quantity",
        "current_quantity",
        "price",
        "original_price",
        "sale_price",
        "status",
        "category_id",
        "code",
        "view",
        "thumbnail",
        "type",
        "brand_id",
        "content",
        "hot",
        "sale",
        "phi_ship",
    ];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name',
            ],
        ];
    }
    public function getPhiShip()
    {
        if ($this->phi_ship) {
            return $this->phi_ship . " vnd";
        }
        return 0;
    }
    public function getStatus()
    {
        $status = $this->status;

        switch ($status) {
            case 1:
                return 'Active';
                break;
            default:
                return 'Pending';
                break;
        }
    }
    public function getHot()
    {
        $status = $this->hot;

        switch ($status) {
            case 1:
                return 'Hot';
                break;
            default:
                return 'No';
                break;
        }
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
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class, 'product_id');
    }
    public function orderCountSold()
    {
        return $this->hasMany(OrderItem::class, 'product_id')->sum('quantity');
    }
    public function imagaes()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function getQuantityAttribute($value)
    {
        $sold = $this->orderItems()->count();
        if ($sold >= $value) {
            return 'Out of stock';
        }
        return $value;
    }
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->where('parent_id', 0)->latest();
    }
    public function brand()
    {
        return $this->hasOne(Brand::class);
    }
    public function scopePublished($query)
    {
        $query->where('status', self::PUBLISHED);
    }

    public function getSalePrice()
    {
        if ($this->sale && $this->sale_price > $this->price) {
            return number_format($this->sale_price) . "₫";
        }
        return '';
    }
    public function scopeHots($query)
    {
        $query->where('hot', self::HOTS);
    }
    public function attachCategories($category_ids, array $attributes = [])
    {
        $this->categories()->attach($category_ids, $attributes);
    }
}
