<?php

use Faker\Generator as Faker;
use App\Course;

$factory->define(Course::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->sentence(10),
        //'image' => $faker->imageUrl(250, 250),
        'image' => $faker->imageUrl(640, 480),
        'route' => $faker->word
    ];
});
