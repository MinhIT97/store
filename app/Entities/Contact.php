<?php

namespace App\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Contact.
 *
 * @package namespace App\Entities;
 */
class Contact extends Model implements Transformable
{
    use TransformableTrait;

    const STATUS_PROCESSED = 1;
    const STATUS_PENDING   = 0;

    protected $fillable = [
        "name",
        "email",
        "status",
    ];

    public function getStatus()
    {
        $status = $this->status;

        switch ($status) {
            case 1:
                return 'Processed';
                break;
            default:
                return 'Pending';
                break;
        }
    }
    public function getDate()
    {
        return Carbon::parse($this->created_at)->format('d/m/Y');
    }
}
