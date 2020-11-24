<?php

namespace App\Http\Middleware;

use App\Helpers\Helper;
use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Console\Concerns\HasParameters;

class CheckPermission
{

    use HasParameters;

    public function handle($request, Closure $next , $permission)
    {
        if(Helper::instance()->isPermitted($permission)){
            return $next($request);
        }

        return redirect(RouteServiceProvider::PROFILE)->with("error","You do not have permission to access requested resource");

    }
}
