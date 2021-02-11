<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Generator as Faker;

$factory->define(App\Country::class, function (Faker $faker) {
    $country = $faker->unique()->country;

    $continent_array = helper::instance()->listContinents();
    $key = array_rand($continent_array);
    $continent = $continent_array[$key];

    return [
        'name' => $country,
        'full_name' => $country,
        'flag' => str_replace(" ","-",$country).".png",
        'population' => $faker->numberBetween($min = 100000, $max = 1000000),
        'size' => $faker->numberBetween($min = 10000, $max = 100000),
        'capital' => $faker->state,
        'currency' => $faker->currencyCode,
        'description' => $faker->paragraph,
        'iso2' => $faker->countryISOAlpha3,
        'iso3' => $faker->countryISOAlpha3,
        'code' => $faker->countryCode,
        'continent' => $continent,
        'official_language' => $faker->word,
        'independence_date' => $faker->date(),
    ];
});



