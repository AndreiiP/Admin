<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Room::class, function (Faker $faker) {
    return [
        'hotel_id' => rand(1,20),
        'price' => $faker->randomNumber(),
        'type' => $faker->firstName(),
        'room' => $faker->image('public/img',200,150, null, false)
    ];
});
