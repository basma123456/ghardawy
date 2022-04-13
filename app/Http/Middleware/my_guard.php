<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class my_guard
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next )
    {

        if(Auth::guard('admin')->check()  ||Auth::guard('super-admin')->check() ||Auth::guard('seller')->check()  ){
            return $next($request);

        }
        $error_msg = 'You Are Not Allowed To Do That';
        return  redirect()->back()->with('error_msg');

    }
}
