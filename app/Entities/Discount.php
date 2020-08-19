<?php

namespace App\Entities;

use App\Traits\QueryTrait;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Discount.
 *
 * @package namespace App\Entities;
 */
class Discount extends Model implements Transformable
{
    use TransformableTrait , QueryTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['code', 'percent', 'status', 'star_date', 'end_date'];

    public function getStatus()
    {
        switch ($this->status) {
            case 1:
                return 'Active';
                break;

            default:
                return 'Pending';
                break;
        }
    }
    public function getStartDate()
    {
        return Carbon::parse($this->star_date)->format('d/m/Y');
    }
    public function getEndDate()
    {
        return Carbon::parse($this->end_date)->format('d/m/Y');
    }
}
