<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entities\Menu;
use Faker\Generator as Faker;

$factory->define(Menu::class, function (Faker $faker) {
    return [
        Menu::create(
            [
                'label' => 'Men',
                'link'  => '/Men',
                'parent_id' => 0,
            ]
        ),
        Menu::create(
            [
                'label' => 'Women',
                'link'  => '/woman',
                'parent_id' => 0,
            ]
        ),
        Menu::create(
            [
                'label' => 'Accessories',
                'link'  => '/accessories',
                'parent_id' => 0,
            ]
        ),
        Menu::create(
            [
                'label' => 'Blog',
                'link'  => '/blog',
                'parent_id' => 0,
            ]
        ),


    ];
});
