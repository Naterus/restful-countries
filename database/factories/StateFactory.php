<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\State;
use Faker\Generator as Faker;

$factory->define(State::class, function (Faker $faker) {
    return [
        'country_id' => function(){
           return \App\Country::all()->random();
        },
        'name' => $faker->state,
        'population' => $faker->randomDigit,
        'slogan' => $faker->sentence,
        'region' => $faker->word,
        'official_language' => $faker->word,
        'size' => $faker->randomDigit,
        'nick_name' => $faker->word,
    ];
});
