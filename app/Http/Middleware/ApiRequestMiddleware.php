<?php

namespace App\Http\Middleware;

use App\ApiRequest;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class ApiRequestMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
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
                "endpoint" => $request->fullUrl(),
                "status" => $status,
                "message" => "Request returned ".$response->getStatusCode()
            ]
        );

        return $next($request);
    }

}
