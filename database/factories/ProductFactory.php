<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entities\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

$factory->define(Product::class, function (Faker $faker) {
    $name = $faker->words(rand(4, 7), true);

    $thumbnail = ['http://store.com/uploads/84561531_183496249408686_9078468584841150464_n.png', 'http://store.com/uploads/240_F_141922877_IOy0qzsg54nfctIaYOu0OtFIiDCekvjs.jpg'];
    $price     = [399000, 499000, 299000, 199000, 599000, 149000, 249000, 349000, 449000, 549000];
    return [
        'name'             => $name,
        'quantity'         => rand(0, 20),
        'current_quantity' => rand(10,15),
        'code'             => $faker->swiftBicNumber,
        'price'            => $price_random= Arr::random($price),
        'original_price'   =>  $price_random - 49000,

        'sale_price'       =>  $price_random * 120 / 100,
        'thumbnail'        => Arr::random($thumbnail),
        'status'           => rand(0, 1),
        'type'             => 'men',
        'content'          => $faker->name,
        'hot'              => 1,
        'brand_id'         => rand(1, 7),
    ];
});

$factory->state(Product::class, 'men', function () {
    $thumbnail = [
        'http://store.com/uploads/240_F_298503742_t9ZQlhksZP9j0HW4w9mlzvVkjEy6RfaB.jpg', 'http://store.com/uploads/240_F_298262562_OpjWYIHcqy3hURiOaTl2r3ijMHRhBOzQ.jpg', 'http://store.com/uploads/240_F_289309560_Flu0vtOKVKlj6a3HEOw484p9QA6oP59U.jpg', 'http://store.com/uploads/240_F_280746881_5yW0cADpuQXJCpX3woL1j1GSPVIacyLY.jpg', 'http://store.com/uploads/240_F_278043410_JNDqM5GfTZ5n0DRgB3TA1crlaIx3azBk.jpg', 'http://store.com/uploads/240_F_275766785_W2PlKIbN238qilZFE5SO38496Njv6TiS.jpg', 'http://store.com/uploads/240_F_274561912_gvHDDHCkRof735jLewV0LYWTpvs6FqEl.jpg', 'http://store.com/uploads/young-handsome-man-is-looking-up-pointing-his-fingers-up_176420-15600.jpg', 'http://store.com/uploads/240_F_275766785_W2PlKIbN238qilZFE5SO38496Njv6TiS.jpg',
        'http://store.com/uploads/240_F_230400456_Allb4bkLLf7aGTgEuTsDGrIJZDKUYEEZ.jpg', 'http://store.com/uploads/240_F_222932390_a2orMFCdHnxhLXM9If5UtZFD40VamYjC.jpg', 'http://store.com/uploads/240_F_221974381_JhOOrFXKcF429SajWlRo6f5A3jUbttS3.jpg', 'http://store.com/uploads/240_F_216784612_76KA246dD11GZdwc4XhiHhVxUuISRxtP.jpg', 'http://store.com/uploads/240_F_213632315_CT7hrL4KSbShzqLgGJegRY4MXj4CuFDx.jpg', 'http://store.com/uploads/240_F_185352494_Aop3aBSdMdBZ1tOvGNh4SVR3YnukKW8K.jpg', 'http://store.com/uploads/240_F_185285461_12M0VoAvKY2IkrcK2gmNTi36vUAm7xqy.jpg',
    ];
    return [
        'type'      => 'men',
        'thumbnail' => Arr::random($thumbnail),
    ];
});
$factory->state(Product::class, 'women', function () {
    $thumbnail = ['http://store.com/uploads/young-woman-suit-standing-by-scooter_1303-11931.jpg', 'http://store.com/uploads/young-pretty-lady-posing-dark-wall_171337-20182.jpg', 'http://store.com/uploads/young-caucasian-woman-winks-eye-holds-okay-gesture-with-hand_1187-23382.jpg', 'http://store.com/uploads/tender-beautiful-young-woman-with-dark-wavy-hair-blue-shirt-having-serious-look-posing-photo-article-about-young-families_176420-14873.jpg', 'http://store.com/uploads/portrait-young-happy-smiling-woman-model-with-bright-makeup-colorful-lips-with-two-pigtails-sunglasses-summer-red-clothes-isolated_158538-8669.jpg', 'http://store.com/uploads/portrait-hipster-girl-glasses-pink-wall_169016-1401.jpg', 'http://store.com/uploads/modern-fashion-sale-banner_1340-15881.jpg', 'http://store.com/uploads/fashion-stylish-beautiful-young-brunette-woman-model-summer-hipster-colorful-casual-clothes-posing-street-background_158538-13146.jpg'];
    return [
        'type'      => 'women',
        'thumbnail' => Arr::random($thumbnail),
    ];
});
$factory->state(Product::class, 'accessories', function () {
    $thumbnail = [
        'http://store.com/uploads/flat-lay-with-women-accessories_72402-379.jpg', 'http://store.com/uploads/beige-bag-black-shoes-white-fur_134398-395.jpg', 'http://store.com/uploads/beach-summer-holiday-vacation-journey-exploration-concept_53876-31832.jpg', 'http://store.com/uploads/advertising-jewelry-jewelry-copy-space_91497-1184.jpg', 'http://store.com/uploads/240_F_344266135_5tgVljOkapP2ZR9xQXWMW5YTEC00R8nN.jpg', 'http://store.com/uploads/240_F_331693586_WeyhZc2HNdEuu5VNsmeaV9ivcSHJcl3z.jpg',
        'http://store.com/uploads/240_F_322183570_yht120S8LOepkXhaBzn54SBUD7resdfh.jpg', 'http://store.com/uploads/240_F_255253209_I8M2u3UQImf7IFFWTlFZFgRMmXXKLb8U.jpg', 'http://store.com/uploads/240_F_185261221_JWnNenPeA5fm67FOj82c7yfIq55Uzup9.jpg', 'http://store.com/uploads/240_F_183808357_Se0k7QHNcGktpR0XImqVrep1S2RKZGTs.jpg', 'http://store.com/uploads/240_F_176105419_REuOCh7RXDVGelW5eXzbx425Y794dJpu.jpg', 'http://store.com/uploads/240_F_137586753_4FYiNt5cXNKO5mCyWA4ROZZGGtLXW8PR.jpg', 'http://store.com/uploads/240_F_120379831_qzJRvUwz8R7I3lnXfX7H07xZg2x5CXNs.jpg', 'http://store.com/uploads/240_F_119624287_ZPVoHHtRBHcLnxJoAhvdBC1FOJXNvYIK.jpg',
    ];
    return [
        'type'      => 'accessories',
        'thumbnail' => Arr::random($thumbnail),
    ];
});
