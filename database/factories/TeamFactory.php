<?php

use Faker\Generator as Faker;

// instead of teams, we're going to use the $faker company value
$factory->define(App\Models\Team::class, function (Faker $faker) {
    return [
        'api_token' => str_random(60),
        'name' => $faker->company
    ];
});
