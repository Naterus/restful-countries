<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Permission;
use App\Helpers\Helper;
use App\Role;
//use Faker\Generator as Faker;

$factory->define(Permission::class, function () {
    $operation= helper::instance()->appOperations();
    return [
        "role_id" => function(){
            return Role::where('role','Super Admin')->first();
        },
        "permission" => $operation,
    ];
});
