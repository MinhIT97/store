<?php

namespace App\Entities;

use App\Traits\HasPermissions;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Role.
 *
 * @package namespace App\Entities;
 */
class Role extends Model implements Transformable
{
    use TransformableTrait;
    const ACTIVE  = 1;
    const PENDING = 0;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'slug', 'description', 'status'];
    public function users()
    {
        return $this->belongsToMany('App\User');
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
    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

}
