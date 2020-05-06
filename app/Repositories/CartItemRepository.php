<?php

namespace App\Repositories;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface CartItemRepository.
 *
 * @package namespace App\Repositories;
 */
interface CartItemRepository extends RepositoryInterface
{
    public function getEntity();
}
