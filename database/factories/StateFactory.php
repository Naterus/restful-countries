<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\State;
use Faker\Generator as Faker;

$factory->define(State::class, function (Faker $faker) {
    return [
        'country_id' => factory(App\Country::class),
        'name' => $faker->state,
        'population' => $faker->numberBetween($min = 100000, $max = 1000000),
        'slogan' => $faker->sentence,
        'region' => $faker->word,
        'official_language' => $faker->word,
        'size' => $faker->numberBetween($min = 1000, $max = 10000),
        'nick_name' => $faker->word,
    ];
});
