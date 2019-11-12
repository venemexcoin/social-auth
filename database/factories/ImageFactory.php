<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Image;
use Faker\Generator as Faker;

$factory->define(App\Image::class, function (Faker $faker) {
    return [
        'url' => $faker->imageUrl(1024, 1024),
    ];
});
