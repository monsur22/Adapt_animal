<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class AdminMiddlewaere
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
        if (Auth::check() && Auth::user()->user_role == 'admin') {
            return $next($request);
        }elseif (Auth::check() && Auth::user()->user_role == 'user') {
            return redirect('/user');
        }else {
            return redirect('/login');
        }
        // return $next($request);
    }
}
