<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        // Support multiple roles by checking if the user’s role is in a list of roles
        if(Auth::check() && (in_array(Auth::user()->role, explode('|', $role)))) {
            return $next($request);
        }
    
        // You can also redirect to an unauthorized page or return a more user-friendly response
        abort(403, 'Unauthorized');
    }
    
}
