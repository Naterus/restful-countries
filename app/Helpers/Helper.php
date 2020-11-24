<?php


/*
 * This file is part of the Restful Countries API.
 *
 * (c) Nathan Dauda Aluwong <nathandauda27@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
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
            "VIEW COUNTRY",
            "CREATE COUNTRY",
            "UPDATE COUNTRY",
            "DELETE COUNTRY",
            "VIEW STATE",
            "CREATE STATE",
            "UPDATE STATE",
            "DELETE STATE",
            "VIEW DISTRICT",
            "CREATE DISTRICT",
            "UPDATE DISTRICT",
            "DELETE DISTRICT",
            "VIEW PRESIDENT",
            "CREATE PRESIDENT",
            "UPDATE PRESIDENT",
            "DELETE PRESIDENT"
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

    public static function instance()
    {
        return new Helper();
    }

}
