<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entities\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    $name = $faker->words(rand(1, 3), true);
    return [
        'name'      => $name,
        'parent_id' => random_int(0, 2),
        'type'      => 'products',

    ];
});

// $factory->state(Category::class, 'products', function () {
//     return [
//         'type' => 'products',
//     ];
// });
