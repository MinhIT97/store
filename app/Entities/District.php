<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class District.
 *
 * @package namespace App\Entities;
 */
class District extends Model implements Transformable
{
    use TransformableTrait;
    const STATUS_ACTIVE  = 1;
    const STATUS_PENDING = 0;

    const TYPE_CITY     = 1; // Thành Phố
    const TYPE_TOWNSHIP = 2; // Quận
    const TYPE_DISTRICT = 3; // Huyện
    const TYPE_TOWN     = 4; // Thị Xã
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'type',
        'location',
        'province_id',
        'status',
        'order',
    ];

    public function province()
    {
        return $this->belongsTo(Province::class);
    }

}
