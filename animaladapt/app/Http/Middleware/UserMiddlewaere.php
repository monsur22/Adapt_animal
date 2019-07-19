<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class UserMiddlewaere
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
        $user = $request->user();
        if (($user) && ($request->user()->user_role == 'user'))
        {

            return $next($request);
        }
        return back();
       
    }
}
