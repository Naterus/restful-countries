<?php


/**
 * This file is part of the Restful Countries API/Management Console.
 *
 * @author Nathan Dauda Aluwong <nathandauda27@gmail.com>
 *
 */

namespace App\Helpers;
use Auth;
use App\Role;


class Helper
{

    /**
     * This function returns all app operations which can be assigned to a user
     * @return array
     */
    public function appOperations(){
        return [
            "VIEW DASHBOARD",
            "VIEW API REQUESTS",
            "VIEW FEEDBACKS",
            "MANAGE ROLE",
            "MANAGE USER",
            "MANAGE TOKEN",
            "VIEW COUNTRY",
            "CREATE COUNTRY",
            "UPDATE COUNTRY",
            "DELETE COUNTRY",
            "UPDATE COVID19",
            "VIEW STATE",
            "CREATE STATE",
            "UPDATE STATE",
            "DELETE STATE",
            "VIEW PRESIDENT",
            "CREATE PRESIDENT",
            "UPDATE PRESIDENT",
            "DELETE PRESIDENT"
        ];
    }

    public function listContinents(){
        return [
            "Africa",
            "Antarctica",
            "Asia",
            "Australia",
            "Europe",
            "North America",
            "South America"
        ];

    }

    /**
     * This function will be used to check if user has the permission to perform any operation
     * @param $operation
     * @return bool
     */
    public function isPermitted($operation){

        $get_user_role = Role::whereId(Auth::user()->role_id)->first();

        foreach($get_user_role->permissions as $permission){
            //Check if users role has permission for provided operation
            if($permission->permission == $operation){
                return true;
            }
        }

        return false;

    }

    public function duplicate($original_array, $count){
        $new_array = [];
        for ($i=0 ; $i < $count; $i++){
            $new_array[$i] = $original_array;
        }
        return $new_array;
    }

    public static function instance()
    {
        return new Helper();
    }


}
