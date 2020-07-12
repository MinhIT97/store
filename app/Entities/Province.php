<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Province.
 *
 * @package namespace App\Entities;
 */
class Province extends Model implements Transformable
{
    use TransformableTrait;
    const STATUS_ACTIVE  = 1;
    const STATUS_PENDING = 0;

    const TYPE_CITY       = 1;
    const TYPE_PROVINCIAL = 2; // Tỉnh
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'type',
        'status',
        'order',
    ];
    public function districts()
    {
        return $this->hasMany(District::class);
    }

}
