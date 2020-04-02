<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entities\Brand;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

$factory->define(Brand::class, function (Faker $faker) {
    $brand = ['H&M', 'D&G', 'Hermes', 'Adidas', 'Louis Vuitton', 'CHANEL'];
    return [
        'name' => Arr::random($brand),
    ];
});
