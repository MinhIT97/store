<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entities\Brand;
use App\Entities\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

$factory->define(Product::class, function (Faker $faker) {
    $name = $faker->words(rand(4, 7), true);
    $arr  = ['men', 'women', 'accessories'];
    return [
        'name'       => $name,
        'quantity'   => rand(0, 20),
        'code'       => $faker->swiftBicNumber,
        'price'      => rand(100000, 200000),
        'sale_price' => rand(0, 200000),
        'thumbnail'  => '84561531_183496249408686_9078468584841150464_n.png',
        'status'     => rand(0, 1),
        'type'       => Arr::random($arr),
        'content'    => $faker->name,
        'hot'        => 1,
        'brand_id'   => function () {
            return factory(Brand::class)->create()->id;
        },
    ];
});
