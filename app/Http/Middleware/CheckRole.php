<?php

namespace App\Http\Middleware;
use Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {

        // Check if user is logged in
        if (!Auth::check()) {
            return redirect('login'); // Send to login page if not logged in
        }

         
        $userRoleId = Auth::user()->role_id;

        if (!in_array($userRoleId, $roles)) {
            abort(403, 'You are not allowed to access this page.');
        }

        return $next($request);
    }
}
