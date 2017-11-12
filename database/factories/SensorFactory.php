<?php

use Faker\Generator as Faker;

$factory->define(App\Sensor::class, function (Faker $faker) {
      return [
      	'project_id' => function()
      		{
      			return factory('App\Project')->create()->id;
      		},
        'designation' => $faker->word,
        'remarque' => $faker->text,
        'unit_short' => $faker->word,
        'unit_long' => $faker->word,
        'archived' => $faker->boolean,
    ];
});
