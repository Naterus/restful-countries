<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Permission;
use Faker\Generator as Faker;

$factory->define(Permission::class, function (Faker $faker) {

    //Throws errror : FIX
    return [
        array([
            "role_id" => function (){
                return Role::all()->random();
            },
            "permission" => "VIEW DASHBOARD",
        ],
        [
            "role_id" => function (){
                return Role::all()->random();
            },
            "permission" => "VIEW API REQUESTS",
        ],
        [
            "role_id" => function (){
                return Role::all()->random();
            },
            "permission" =>  "VIEW FEEDBACKS",
        ],
        [
            "role_id" => function (){
                return Role::all()->random();
            },
            "permission" => "MANAGE ROLE",
        ],
        [
            "role_id" => function (){
                return Role::all()->random();
            },
            "permission" => "MANAGE USER",
        ],
        [
            "role_id" => function (){
                return Role::all()->random();
            },
            "permission" => "VIEW COUNTRY",
        ],
        [
            "role_id" => function (){
                return Role::all()->random();
            },
            "permission" => "CREATE COUNTRY",
        ],
        [
            "role_id" => function (){
                return Role::all()->random();
            },
            "permission" => "UPDATE COUNTRY",
        ],
        [
            "role_id" => function (){
                return Role::all()->random();
            },
            "permission" => "DELETE COUNTRY",
        ],
        [
            "role_id" => function (){
                return Role::all()->random();
            },
            "permission" => "VIEW STATE",
        ],
        [
            "role_id" => function (){
                return Role::all()->random();
            },
            "permission" => "CREATE STATE",
        ],
        [
            "role_id" => function (){
                return Role::all()->random();
            },
            "permission" => "UPDATE STATE",
        ],
        [
            "role_id" => function (){
                return Role::all()->random();
            },
            "permission" => "DELETE STATE",
        ],
        [
            "role_id" => function (){
                return Role::all()->random();
            },
            "permission" => "VIEW PRESIDENT",
        ],
        [
            "role_id" => function (){
                return Role::all()->random();
            },
            "permission" => "CREATE PRESIDENT",
        ],
        [
            "role_id" => function (){
                return Role::all()->random();
            },
            "permission" => "UPDATE PRESIDENT",
        ],
        [
            "role_id" => function (){
                return Role::all()->random();
            },
            "permission" => "DELETE PRESIDENT",
        ])
    ];
});
