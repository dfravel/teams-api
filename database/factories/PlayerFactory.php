<?php

use Faker\Generator as Faker;

// instead of teams, we're going to use the $faker company value
$factory->define(App\Models\Player::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName
    ];
});
