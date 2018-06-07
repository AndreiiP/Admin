<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Hotel::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName(),
        'address' => $faker->lastName(),
        'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'photo' => $faker->image('public/img',400,300, 'city', false)
    ];
});
