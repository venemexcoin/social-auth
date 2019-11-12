<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'user_id'    => rand(1, 5),
        'product'    => $faker->text('15'),
        'imei'       => $faker->unixTime($max = 'now'),
        'bulkimei'   => $faker->unixTime($max = 'now'),
        'time'       => $faker->text('15'),
        'nota'       => $faker->text('20'),
        'comentario' => $faker->text('20'),
        'email'      => $faker->safeEmail,
    ];
});
