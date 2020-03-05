<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class OrderItem.
 *
 * @package namespace App\Entities;
 */
class OrderItem extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "product_id",
        "quantity",
        "price",
        'sale_price',
        'order_id',
        "status",
    ];

}
