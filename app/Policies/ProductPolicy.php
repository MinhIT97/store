<?php

namespace App\Policies;

use App\Entities\Product;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
{
    use HandlesAuthorization;

    public function before($user, $ability)
    {

        if ($user->isSuperAdmin()) {
            return true;
        }
    }
    public function viewAny(User $user)
    {
        return $user->hasRole('seller');

    }

    public function view(User $user, Product $product)
    {
        return $user->hasRole('seller');
    }

    public function create(User $user)
    {
        return $user->hasRole('seller');
    }

    public function update(User $user, product $product)
    {
        return $user->hasRole('seller');
    }

    public function delete(User $user, product $product)
    {
        return $user->hasRole('seller');
    }

    public function restore(User $user, product $product)
    {

    }

    public function forceDelete(User $user, product $product)
    {
        //
    }
}
