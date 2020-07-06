<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Worker::class, function (Faker $faker) {

    return [
        'first_name' => $faker->name,
        'last_name' => $faker->lastName,
        'birthday' => $faker->dateTimeBetween('-50 years', '-20 years'),
        'position' => $faker->numberBetween(1, App\Position::all()->count()),
        'active' => $faker->numberBetween(0, 1),
        //
    ];
});
