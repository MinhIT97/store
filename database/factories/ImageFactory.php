<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entities\Image;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

$factory->define(Image::class, function (Faker $faker) {
    $arr = ['pla3.png','pla6.png'];
    return [
        'url' =>Arr::ramdom($arr),
    ];
});
