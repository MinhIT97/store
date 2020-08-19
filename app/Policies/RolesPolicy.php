<?php

namespace App\Policies;

use App\Entities\Role;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RolesPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any roles.
     *
     * @param  \App\User  $user
     * @return mixed
     */

    public function before($user, $ability)
    {
        return $user->isSuperAdmin();
    }
    public function viewAny(User $user)
    {

        return $user->level == 1 && $user->status == 1 && $user->hasRole('superadmin');
    }


    public function view(User $user, Role $role)
    {

        return $user->level == 1 && $user->status == 1 && $user->hasRole('superadmin');
    }


    public function create(User $user)
    {
        return $user->level == 1 && $user->status == 1 && $user->hasRole('superadmin');
    }


    public function update(User $user, Role $role)
    {
        return $user->level == 1 && $user->status == 1 && $user->hasRole('superadmin');
    }


    public function delete(User $user, Role $role)
    {
        return $user->level == 1 && $user->status == 1 && $user->hasRole('superadmin');
    }


    public function restore(User $user, Role $role)
    {
        //
    }


    public function forceDelete(User $user, Role $role)
    {
        //
    }
}
