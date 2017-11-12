<?php

use Faker\Generator as Faker;

$factory->define(App\Project::class, function (Faker $faker) {
    return [
        'designation' => $faker->word,
        'remarque' => $faker->text,
        'location_lat' => $faker->latitude,
        'location_long' => $faker->longitude,
        'auth_code' => $faker->uuid,
        'archived' => $faker->boolean,
    ];
});
