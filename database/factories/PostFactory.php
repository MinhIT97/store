<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entities\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {

    return [
        'title'       => $faker->words(rand(4, 7), true),
        'content'     => $faker->paragraphs(rand(4, 7), true),
        'description' => $faker->sentences(rand(4, 7), true),
        'view'        => random_int(100, 200),
    ];
});
