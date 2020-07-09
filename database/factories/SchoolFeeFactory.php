<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SchoolFee;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(SchoolFee::class, function (Faker $faker) {

    $dates = $faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now', $timezone = null);
    $endDate = Carbon::parse($dates)->addMonth(5);

    return [
        'school_year' => $dates->format('Y'),
        'mount' => $faker->numberBetween($min = 100000, $max = 900000),
        'schedule_start' => $dates,
        'schedule_end' => $endDate,
    ];
});
