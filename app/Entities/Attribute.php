<?php

namespace App\Entities;

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
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "size",
        "attibuteable_type",
        "attibuteable_id",
        "color",
        "quantity",
        "current_quantity",
    ];

}
