<?php

namespace App\Http\Middleware;

use App\ApiRequest;
use Closure;


class ApiRequestMiddleware
{

    public function handle($request, Closure $next)
    {
        //Log After result is sent
        $response = $next($request);

        $status = null;
        if($response->getStatusCode() == 200){
            $status = 1;
        }else{
            $status = 0;
        }
        ApiRequest::create([
                "endpoint" => $request->path(),
                "status" => $status,
                "host" => $request->getClientIp(),
                "email" => $request->user()->email,
                "website" => $request->user()->website,
                "message" => "Request returned ".$response->getStatusCode()
            ]
        );

        return $next($request);
    }


}
