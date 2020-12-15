<?php

namespace App\Exceptions;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Exceptions\ThrottleRequestsException;
use Illuminate\Http\Response;
use Illuminate\Auth\AuthenticationException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Throwable
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {
        if($exception instanceof ModelNotFoundException){
            return response()->json([
                "error" => [
                    "status" => Response::HTTP_NOT_FOUND,
                    "message" => $exception->getMessage()
                ]
            ],404);
        }

        if($exception instanceof ThrottleRequestsException){
            return response()->json([
                "error" => [
                    "status" => Response::HTTP_TOO_MANY_REQUESTS,
                    "message" => $exception->getMessage()
                ]
            ],429);
        }

        if($exception instanceof AuthenticationException){
            return response()->json([
                "error" => [
                    "status" => Response::HTTP_UNAUTHORIZED,
                    "message" => $exception->getMessage()." Visit https://www.restfulcountries.com/request-access-token to generate token. See documentation for more details."
                ]
            ],401);
        }

        return parent::render($request, $exception);
    }
}
