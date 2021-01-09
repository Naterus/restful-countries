<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Covid19;
use App\Country;
use App\User;
use Faker\Generator as Faker;

$factory->define(Covid19::class, function (Faker $faker) {
    return [
        'country_id' => factory(App\Country::class),
        'total_case' => $faker->numberBetween($min = 10000, $max = 100000),
        'total_deaths' =>$faker->numberBetween($min = 1000, $max = 10000),
        'updated_by'=>function(){
            return User::where("role_id",1)->first();
        },
    ];
});
