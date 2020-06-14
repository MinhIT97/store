<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entities\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    $name = $faker->words(rand(4, 7), true);
    return [
        'name'      => $name,
        'parent_id' => 0,
        'status'    => 1,

    ];
});

// $factory->state(Category::class, 'products', function () {
//     return [
//         'type' => 'products',
//     ];
// });
