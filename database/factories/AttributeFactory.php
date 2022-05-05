<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entities\Attribute;
use Faker\Generator as Faker;

$factory->define(Attribute::class, function (Faker $faker) {
    return [
        'color_id'         => rand(1, 3),
        'size_id'          => rand(1, 4),
        'quantity'         => 10,
        'current_quantity' => 10,
    ];
});
