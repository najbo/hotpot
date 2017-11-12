<?php

use Faker\Generator as Faker;

$factory->define(App\Sensordata::class, function (Faker $faker) {
    return [
        'sensor_id' => function()
      		{
      			return factory('App\Sensor')->create()->id;
      		},
        'data' => $faker->randomDigit,
        'recorded_at' => $faker->dateTime(),
        'archived' => $faker->boolean,
    ];
});
