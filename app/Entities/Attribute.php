<?php

namespace App\Entities;

use App\Traits\QueryTrait;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Attribute.
 *
 * @package namespace App\Entities;
 */
class Attribute extends Model implements Transformable
{
    use TransformableTrait, QueryTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "product_id",
        "color_id",
        "quantity",
        "current_quantity",
        "size_id",
    ];

    public function size()
    {
        return $this->hasOne(Size::class, 'id', 'size_id');
    }
    public function color()
    {
        return $this->hasOne(Color::class, 'id', 'color_id');
    }
}
