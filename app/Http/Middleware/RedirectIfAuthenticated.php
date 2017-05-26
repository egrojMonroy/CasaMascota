<?php

namespace petstore\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use petstore\User;
use petstore\User_role;

class RedirectIfAuthenticated{
    public function handle($request, Closure $next, $guard = null){
        if (Auth::guard($guard)->check()) {
            return redirect('/home');
        }
        
        return $next($request);
    }
}
