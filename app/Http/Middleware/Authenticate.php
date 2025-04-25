<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Closure;

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
        if (! $request->expectsJson()) {
            return route('login');
        }
    }

    // public function handle($request, Closure $next,...$guest)
	// {      
	// 	if(\Auth::check()){
    //         if(\Auth::user()->role_id == 1){
    //             return redirect(route('admin.home'));

    //         }
	// 		return redirect(route('home'));
            
	// 	}else{
    //         return redirect(route('login'));
    //     } 
		  
	// 	return $next($request); 
	// }
}