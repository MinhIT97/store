<?php

namespace App\Supports\Traits;

use App\Entities\Product;
use Illuminate\Support\Str;
use VCComponent\Laravel\MediaManager\Entities\Media;

trait ProductSeederTrait
{
    protected function seederProducts()
    {
        return factory(Product::class, 50)
            ->create();
    }
}
