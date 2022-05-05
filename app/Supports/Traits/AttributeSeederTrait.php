<?php

namespace App\Supports\Traits;

use App\Entities\Attribute;

trait AttributeSeederTrait
{
    protected function seederAttribute($id)
    {
        return factory(Attribute::class, 3)
            ->create(['product_id' => $id]);
    }

}
