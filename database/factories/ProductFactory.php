<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'user_id'     => rand(1, 5),
        'name'        =>$faker->sentence,
        'description' => $faker->text(150),
        'time'        => $faker->sentence,
        'info'      => $faker->text(200),
        'price'       => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 500),  
    ];
});
