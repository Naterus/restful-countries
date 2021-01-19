<?php

use App\Country;
use App\Covid19;
use Illuminate\Support\Facades\DB;
use App\Permission;
use App\Role;
use App\User;
use App\PersonalAccessToken;
use App\State;
use Illuminate\Support\Facades\Schema;
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


        if (env('APP_ENV') === 'production') exit('Fatal! APP is in production');

        //Truncates all tables in the database
        Schema::disableForeignKeyConstraints();

        $tableNames = Schema::getConnection()->getDoctrineSchemaManager()->listTableNames();
        foreach ($tableNames as $table) {
            if ($table != 'migrations')
                DB::table($table)->truncate();
        }

        Schema::enableForeignKeyConstraints();

        //Test assumes Super Admin should always be id 1
        $role =  Role::create(["role"=> 'Super Admin']);

        //Create permissions for Super admin role
        foreach (helper::instance()->appOperations() as $operation){
            Permission::create([
                "role_id" => $role->id,
                "permission" => $operation
            ]);
        }
        Role::create(["role"=> 'User']);


        factory(App\User::class)->states('admin')->create();
        factory(App\User::class,5)->create()->each(function ($user){
            $user->createToken('authToken')->plainTextToken;

//            factory(App\PersonalAccessToken::class)->create([
//                "tokenable_id" => $user->id
//            ]);
        });

        factory(App\Country::class, 10)->create()->each(function ($country){
            factory(App\State::class,5)->create([
                "country_id" => $country->id
            ]);
            factory(App\Covid19::class)->create([
                "country_id" => $country->id
            ]);
        });






    }
}
