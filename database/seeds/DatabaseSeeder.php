<?php

use App\Permission;
use App\Role;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        factory(App\Country::class,4)->create();
        factory(App\State::class,50)->create();
        factory(App\Role::class,1)->create();
        factory(App\User::class,1)->create();
        factory(App\Permission::class,17)->create();

    }
}
