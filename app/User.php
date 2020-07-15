<?php

namespace App;

use App\Entities\Role;
use App\Traits\HasPermissions;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable , HasPermissions;

    const ACTIVE = 1;
    const BANNED = 0;
    const USER   = 0;
    const ADMIN  = 1;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'level', 'verify_token', 'phone', 'avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
    public function getStatus()
    {
        $status = $this->status;
        switch ($status) {
            case 0:
                return 'Not safe';
                break;
            case 1:
                return 'Active';
                break;
            case 2:
                return 'Banned';
                break;

            default:
                return 'not safe';
                break;
        }
    }

    public function getRoles()
    {
        $roles = $this->roles->toArray();
        $roles = collect($roles)->implode('name', ', ');
        return $roles;
    }

    public function isSuperAdmin()
    {
        $superAdmin = $this->level === 1 && $this->status === 1 && $this->hasRole('superadmin');
        return $superAdmin;
    }
}
