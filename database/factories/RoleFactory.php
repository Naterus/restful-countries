<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Role;
use Faker\Generator as Faker;


$factory->define(Role::class, function (Faker $faker) {
    return [
        "role"=> 'User'
    ];
});

$factory->state(Role::class,'admin', function (Faker $faker) {
    return [
        "role"=> 'Super Admin'
    ];
});