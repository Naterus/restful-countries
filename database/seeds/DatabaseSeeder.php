<?php

use App\Country;
use App\Covid19;
use App\Helpers\Helper;
use App\Permission;
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

        factory(App\Country::class,5)->create();
        factory(App\State::class,100)->create();
        factory(App\Role::class,1)->create();
        factory(App\User::class,1)->create();

        //Create permissions for Super admin role
        foreach (helper::instance()->appOperations() as $operation){
            Permission::create([
                "role_id" => 1,
                "permission" => $operation
            ]);
        }

        //Create covid 19 data for newly seeded countries
        $countries = Country::all();
        foreach ($countries as $country){
            Covid19::create([
                "country_id" => $country->id,
                "updated_by" => 1
            ]);
        }

    }
}
