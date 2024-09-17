<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = session('user');
        foreach ($user['roles'] as $role) {
            if ($role['name'] == 'admin') {
                return $next($request);
            } else {
                if ($role['name'] == 'guest') {
                    return redirect()->route('dashboard.users.profile');
                }
                return redirect('/');
            }
        }
    }
}
