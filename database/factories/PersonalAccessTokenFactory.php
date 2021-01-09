<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PersonalAccessToken;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\User;
$factory->define(PersonalAccessToken::class, function (Faker $faker) {
    return [
        'tokenable_type' => 'App\User',
        'tokenable_id' => factory(App\User::class),
        'name' => 'authToken',
        'token' => hash('sha256',Str::random(40)),
        'abilities' => '["*"]',
        'last_used_at' => $faker->dateTime(),

    ];
});
