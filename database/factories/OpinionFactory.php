<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Opinions::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(3),
		'rating' => rand(1,5),
		'description' => $faker->text(150),
		'name' => $faker->name,
		'who' => $faker->jobTitle,
    ];
});
