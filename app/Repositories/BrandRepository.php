<?php

namespace App\Repositories;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface BrandRepository.
 *
 * @package namespace App\Repositories;
 */
interface BrandRepository extends RepositoryInterface
{
    public function getEntity();
    public function getProduct($id);
}
