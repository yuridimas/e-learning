<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Course;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {

    $title = $faker->unique()->sentence($nbWords = 6, $variableNbWords = true);

    return [
        'title' => $title,
        'slug' => Str::slug($title),
        'code' => $faker->unique()->numerify('SC##'),
        'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
    ];
});
