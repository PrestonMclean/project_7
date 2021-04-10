<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\todos;
use Faker\Generator as Faker;

$factory->define(todos::class, function (Faker $faker) {
    return [
      'name' => $faker->sentence(4),
      'status' => $faker->randomElement($array = array ('complete','incomplete'))
    ];
});
