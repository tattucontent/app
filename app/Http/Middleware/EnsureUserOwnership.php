<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class EnsureUserOwnership
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response
    // {
    //     $profileId = $request->route('profile');  // Assuming 'profile' is the route parameter

    //     // Check if the profile belongs to the authenticated user
    //     if ($profileId != Auth::id()) {
    //         abort(403, 'Unauthorized action.');
    //     }
    //     return $next($request);
    // }
}
