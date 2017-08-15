<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Admin;

class AdminMiddleware
{
    // /**
    //  * Handle an incoming request.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \Closure  $next
    //  * @return mixed
    //  */
    // public function handle($request, Closure $next)
    // {
    //     public function handle($request, Closure $next)
    // {
    //     if(!Auth::check() || Auth::Admin()->name != $name){
    //         return redirect('notadmin');
    //     }
    //     return $next($request);
    // }
    // }
}
