<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entities\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

$factory->define(Post::class, function (Faker $faker) {
    $thumbnail = [
        'http://store.com/uploads/flat-lay-with-women-accessories_72402-379.jpg', 'http://store.com/uploads/beige-bag-black-shoes-white-fur_134398-395.jpg', 'http://store.com/uploads/beach-summer-holiday-vacation-journey-exploration-concept_53876-31832.jpg', 'http://store.com/uploads/advertising-jewelry-jewelry-copy-space_91497-1184.jpg', 'http://store.com/uploads/240_F_344266135_5tgVljOkapP2ZR9xQXWMW5YTEC00R8nN.jpg', 'http://store.com/uploads/240_F_331693586_WeyhZc2HNdEuu5VNsmeaV9ivcSHJcl3z.jpg',
        'http://store.com/uploads/240_F_322183570_yht120S8LOepkXhaBzn54SBUD7resdfh.jpg', 'http://store.com/uploads/240_F_255253209_I8M2u3UQImf7IFFWTlFZFgRMmXXKLb8U.jpg', 'http://store.com/uploads/240_F_185261221_JWnNenPeA5fm67FOj82c7yfIq55Uzup9.jpg', 'http://store.com/uploads/240_F_183808357_Se0k7QHNcGktpR0XImqVrep1S2RKZGTs.jpg', 'http://store.com/uploads/240_F_176105419_REuOCh7RXDVGelW5eXzbx425Y794dJpu.jpg', 'http://store.com/uploads/240_F_137586753_4FYiNt5cXNKO5mCyWA4ROZZGGtLXW8PR.jpg', 'http://store.com/uploads/240_F_120379831_qzJRvUwz8R7I3lnXfX7H07xZg2x5CXNs.jpg', 'http://store.com/uploads/240_F_119624287_ZPVoHHtRBHcLnxJoAhvdBC1FOJXNvYIK.jpg',
    ];
    return [
        'title'       => $faker->words(rand(4, 7), true),
        'content'     => $faker->paragraphs(rand(4, 7), true),
        'description' => $faker->sentences(rand(4, 7), true),
        'view'        => random_int(100, 200),
        'user_id'     => random_int(1, 2),
        'type'        => 'blogs',
        'thumbnail' => Arr::random($thumbnail),

    ];
});
