<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entities\Attribute;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

$factory->define(Attribute::class, function (Faker $faker) {
    $color = ['black', 'white', 'gray', 'blue'];
    return [
        'color'    => Arr::random($color),
        'size'     => random_int(38, 42),
        'quantity' => random_int(10, 100),
        'current_quantity' => random_int(2,10),
    ];
});
