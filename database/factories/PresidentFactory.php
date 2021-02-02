<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\President;
use App\User;
use Faker\Generator as Faker;

$factory->define(President::class, function (Faker $faker) {
    $gender = ['male','female'];
    $name = $faker->name;
    return [
        'country_id' => factory(App\Country::class),
        'name' => $name,
        'gender' => $gender[rand(0,1)],
        'appointment_start_date' => $faker->dateTimeThisCentury(),
        'appointment_end_date' => $faker->dateTime(),
        'picture' => str_replace(" ","-",$name).".png",
        'created_by' => function(){
            return User::where("role_id",1)->first();
        }
    ];
});
