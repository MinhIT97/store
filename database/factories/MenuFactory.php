<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entities\Menu;
use Faker\Generator as Faker;

$factory->define(Menu::class, function (Faker $faker) {
    return [
        Menu::create(
            [
                'label' => 'Nam',
                'link'  => '/Men',
                'parent_id' => 0,
            ]
        ),
        Menu::create(
            [
                'label' => 'Nữ',
                'link'  => '/woman',
                'parent_id' => 0,
            ]
        ),
        Menu::create(
            [
                'label' => 'Phụ kiện',
                'link'  => '/accessories',
                'parent_id' => 0,
            ]
        ),
        Menu::create(
            [
                'label' => 'blog',
                'link'  => '/blog',
                'parent_id' => 0,
            ]
        ),


    ];
});
