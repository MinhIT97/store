<?php

namespace App\Entities;

use App\Traits\HasPermissions;
use App\User as AppUser;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Taggables.
 *
 * @package namespace App\Entities;
 */
class User extends AppUser implements Transformable
{
    use TransformableTrait, HasPermissions;

}
