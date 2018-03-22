<?php

use Faker\Generator as Faker;

$factory->define(App\car::class, function (Faker $faker) {
    return [
        'make' => $faker->randomElement($array = array ('Ford','Honda','Toyota')),
    ];
});
