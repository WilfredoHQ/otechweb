<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Project::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(4),
		'description' => $faker->text(150),
		'url' => $faker->url,
		'file' => $faker->imageURL($width = 1200, $height = 400),
    ];
});