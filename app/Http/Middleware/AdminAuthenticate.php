<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminAuthenticate
{
    /**
     * Ensure only authenticated admins can access protected routes.
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!$request->session()->get('admin_authenticated', false)) {
            return redirect()->route('admin.login')->with('error', 'Please sign in to access the admin panel.');
        }

        return $next($request);
    }
}
