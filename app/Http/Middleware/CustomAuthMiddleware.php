<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\Response;

class CustomAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $token = session('hummaclass-token');
        // dd($token);
        $response = Http::withToken($token)->get(env('API_URL') . '/api/user');
        if ($response->successful()) {
            return $next($request);
        }
        if ($response->failed()) {
            if ($response->status()) {
                return redirect()->route('login');
            }
        }
    }
}