<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Room::class, function (Faker $faker) {
    return [
        'hotel_id' => rand(531,550),
        'price' => $faker->randomNumber(),
        'type' => $faker->firstName(),
        'room' => $faker->image('public/img',400,300, null, false)
    ];
});
