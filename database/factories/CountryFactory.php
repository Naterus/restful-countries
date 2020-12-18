<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Country;
use Faker\Generator as Faker;

$factory->define(Country::class, function (Faker $faker) {
    $country = $faker->country;
    return [
        'name' => $country,
        'full_name' => $country,
        'flag' => str_replace(" ","-",$country).".png",
        'population' => $faker->randomNumber(),
        'size' => $faker->randomNumber(),
        'capital' => $faker->state,
        'currency' => $faker->currencyCode,
        'description' => $faker->paragraph,
        'iso2' => $faker->countryISOAlpha3,
        'iso3' => $faker->countryISOAlpha3,
        'code' => $faker->countryCode,
        'continent' => $faker->word,
        'official_language' => $faker->word,
        'independence_date' => $faker->date(),
    ];
});
