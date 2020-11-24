<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\District;
use Faker\Generator as Faker;

$factory->define(District::class, function (Faker $faker) {
    return [
        'country_id' => function(){
            return \App\Country::all()->random();
        },
        'state_id' => function(){
            return \App\State::all()->random();
        },
        'name' => $faker->state,
        'description' => $faker->paragraph,
        'population' => $faker->randomDigit,
        'slogan' => $faker->sentence,
        'region' => $faker->word,
        'size' => $faker->word,
        'nick_name' => $faker->word,
        'official_language' => $faker->word
    ];
});
