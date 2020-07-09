<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Grade;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Grade::class, function (Faker $faker) {

    $grade = $faker->unique()->randomElement(['7-A', '7-B', '11-A', '12-C']);

    return [
        'name' => $grade,
        'slug' => Str::slug($grade),
        'description' => $faker->text($maxNbChars = 200),
    ];
});
