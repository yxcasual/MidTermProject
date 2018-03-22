<?php

use Faker\Generator as Faker;

$factory->define(App\car::class, function (Faker $faker) {
    return [


        'make' => $faker->randomElement($array = array ('Ford','Honda','Toyota')),
        'model' => $faker->bothify( '??##??'),
        'year' => $faker->year($max = 'now'),
    ];
});
