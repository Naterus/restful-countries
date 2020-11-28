<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Country;
use Faker\Generator as Faker;

$factory->define(Country::class, function (Faker $faker) {
    return [
        'name' => $faker->country,
        'population' => $faker->randomDigit,
        'description' => $faker->paragraph,
        'flag' => $faker->word,
        'iso2' => $faker->countryISOAlpha3,
        'iso3' => $faker->countryISOAlpha3,
        'code' => $faker->countryCode,
        'continent' => $faker->word,
        'region' => $faker->word,
        'official_language' => $faker->word,
        'independence_date' => $faker->date(),
    ];
});
