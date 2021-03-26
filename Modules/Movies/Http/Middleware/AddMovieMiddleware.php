<?php

namespace Modules\Movies\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddMovieMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::guard('api')->user()) {   // Check is admin logged in
            return response()->json(['error' => 'you are not authenticated as cinema admin', 401]);

        }
        return $next($request); 
    }
}
