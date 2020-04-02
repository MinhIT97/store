<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entities\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

$factory->define(Product::class, function (Faker $faker) {
    $name = $faker->words(rand(4, 7), true);
    $arr  = ['man', 'woman', 'accessories'];
    return [
        'name'       => $name,
        'quantity'   => rand(0, 20),
        'code'       => $faker->swiftBicNumber,
        'price'      => rand(100000, 200000),
        'sale_price' => rand(0, 200000),
        'thumbnail'  => '5887.jpg',
        'status'     => rand(0, 1),
        'type'       => Arr::random($arr),
        'brand_id'   => 1,
    ];
});
