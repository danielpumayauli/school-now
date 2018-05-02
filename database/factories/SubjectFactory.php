<?php

use Faker\Generator as Faker;
use App\Subject;

$factory->define(Subject::class, function (Faker $faker) {
    return [
        'name' => substr($faker->sentence(3), 0 ,-1), // Retorna 3 palabras quitandole el . , $faker->words(3) devuelve un array de 3 palabras
        'description' => $faker->sentence(10),
        'long_description'=> $faker->text,
        'code' => $faker->word,
        'image' => $faker->imageUrl(250,250),

        // FK
        'course_id' => $faker->numberBetween(1,10)
    ];
});
