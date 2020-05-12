<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Collaborator::class, function (Faker $faker) {
    return [
    	'name' => $faker->name,
		'job' => $faker->jobTitle,
		'country' => $faker->country,
		'facebook' => $faker->url,
		'twitter' => $faker->url,
		'google' => $faker->url,
		'file' => $faker->imageURL($width = 1200, $height = 400),
    ];
});
