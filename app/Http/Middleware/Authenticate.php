<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson() ) {



            if(Request::is(app()->getLocale() . '/admin')){
                return redirect('/login/admin');


            }elseif(Request::is(app()->getLocale() . '/seller')){
                return redirect('/login/seller');


            }elseif(Request::is(app()->getLocale() . '/super-admin')){
                return redirect('/login/super-admin');


            }else{

                return route('login');

            }


//            return route('login');
        }
    }
}
