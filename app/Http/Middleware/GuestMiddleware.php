<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GuestMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // dd(session('user'));
        // $user = json_decode(session('user'), true);
        $user = session('user');
        foreach ($user['roles'] as $role) {
            if ($role['name'] == 'guest') {
                return $next($request);
            } else {
                if ($role['name'] == 'admin') {
                    return redirect()->route('admin.home');
                }
                return redirect('/');
            }
        }
    }
}
