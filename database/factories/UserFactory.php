<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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
    return [
        'name' => $faker->name,
        'role_id' => 2,
        'email' => $faker->email,
        'email_verified_at' => $faker->dateTime(),
        'password' =>  bcrypt($faker->password),
        'remember_token' => Str::random(10),
    ];
});

$factory->state(User::class, 'admin', function (Faker $faker) {
    return [
        'name' => "Administrator",
        'role_id' => 1,
        'email' => "administrator@restfulcountries.com",
        'email_verified_at' => $faker->dateTime(),
        'password' => '$2y$10$D1vv7cFf4zzI/Bb5QHdP9unaganGUpK53t.vejmLIryI.DQzZtoxy', // password=12345
        'remember_token' => Str::random(10),
    ];
});


