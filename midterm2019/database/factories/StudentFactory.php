<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'name'=>$faker->sentence(2, true),
        'email'=>$faker->safeEmail,
        'gender'=>$faker->rrn('female'),
        'age'=>$faker->biasedNumberBetween($min = 10, $max = 25, $function = 'sqrt')
    ];
});
