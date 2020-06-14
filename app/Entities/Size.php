<?php

namespace App\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Size.
 *
 * @package namespace App\Entities;
 */
class Size extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'sizes';
    protected $fillable = [
        'id',
        'size'
    ];
    public function getDate()
    {
        return Carbon::parse($this->created_at)->format('d/m/Y');
    }

    public function products()
    {
        return $this->morphedByMany(Product::class, 'sizeabale');
    }
}
