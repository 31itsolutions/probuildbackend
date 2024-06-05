<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Auth\AuthenticationException;
use Auth;
use App\Exceptions\InvalidOrderException;

class Handler extends ExceptionHandler
{


/**
 * Register the exception handling callbacks for the application.
 *
 * @return void
 */
public function register()
{
    $this->reportable(function (InvalidOrderException $e) {
        //
    });
}
    // protected function unauthenticated($request, AuthenticationException $exception)
    // {
    //     if ($request->expectsJson()) {
    //         return response()->json(['error' => 'Unauthenticated.'], 401);
    //     }
    //     if ($request->is('vendor') || $request->is('vendor/*')) {
    //         return redirect()->guest('/login/vendor');
    //     }
    //     if ($request->is('customer') || $request->is('customer/*')) {
    //         return redirect()->guest('/login/customer');
    //     }
    //     return redirect()->guest(route('vendor_login'));
    // }
}