<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Cart.
 *
 * @package namespace App\Entities;
 */
class Cart extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = ['id', 'total'];

    public function cartItems()
    {
        return $this->hasMany(CartItem::class, 'cart_id','id')->with('product','size','color');
    }
    public function calculateTotal(): int
    {
        return $this->cartItems->sum('amount');
    }
}
