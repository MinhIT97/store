<?php

namespace App\Supports\Traits;

use App\Entities\Product;

trait ProductSeederTrait
{
    use AttributeSeederTrait;

    protected function seederProducts()
    {
        return factory(Product::class, 50)
            ->create();
    }

    protected function seederMenProducts()
    {
        return factory(Product::class, 50)
            ->states('men')
            ->create()->each(function ($item, $key) {
                $this->seederAttribute($item->id);
            });
    }
    protected function seederWomenProducts()
    {
        return factory(Product::class, 50)
            ->states('women')
            ->create()->each(function ($item, $key) {
                $this->seederAttribute($item->id);
            });
    }
    protected function seederAccessoriesProducts()
    {
        return factory(Product::class, 50)
            ->states('accessories')
            ->create()->each(function ($item, $key) {
                $this->seederAttribute($item->id);
            });
    }
}
