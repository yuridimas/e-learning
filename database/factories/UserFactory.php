<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {

    $gender = $faker->randomElement(['Pria', 'Wanita']);
    $firstName = $faker->firstName($gender);

    return [
        'name' => $firstName,
        'email' => $firstName.'@'.$faker->freeEmailDomain,
        'email_verified_at' => now(),
        'password' => bcrypt('password'),
        'remember_token' => Str::random(10),
        'gender' => $gender,
        'faith' => $faker->randomElement(['Islam', 'Hindu', 'Kristen', 'Katolik', 'Budha']),
        'address' => $faker->address,
    ];
});
