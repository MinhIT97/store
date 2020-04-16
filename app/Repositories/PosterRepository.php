<?php

namespace App\Repositories;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface PosterRepository.
 *
 * @package namespace App\Repositories;
 */
interface PosterRepository extends RepositoryInterface
{
    public function getEntity();
}
