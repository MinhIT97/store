<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entities\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $name = $faker->words(rand(4, 7), true);
    return [
        'name'        => $name,
        'description' => $faker->sentences(rand(4, 7), true),
        'quantity'    => rand(0, 20),
        'code'        => $faker->swiftBicNumber,
        'price'       => rand(100000, 200000),
        'thumbnail'   => '5887.jpg',
    ];
});
