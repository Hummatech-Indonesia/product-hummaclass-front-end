<?php

namespace App\Http\Middleware;

use App\Helpers\CheckRoleHelper;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TeacherMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // dd(session('user'));
        // $user = json_decode(session('user'), true);
        $user = session('user');
        foreach ($user['roles'] as $role) {
            if ($role['name'] == 'teacher') {
                return $next($request);
            } else {
                return redirect(CheckRoleHelper::check($user));
            }
        }
    }
}