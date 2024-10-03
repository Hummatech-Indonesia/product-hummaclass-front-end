<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
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
        Session::put('next-request', $request->fullUrl());
        $token = session('hummaclass-token');

        if (!$token) {
            return redirect()->route('login');
        }

        try {
            $response = Http::withToken($token)
                ->maxRedirects(5)
                ->get(config('app.api_url') . '/api/user');

            if ($response->successful()) {
                return $next($request);
            } else {
                return redirect()->route('login');
            }
        } catch (\Exception $e) {
            \Log::error('API request error: ' . $e->getMessage());
            return redirect()->route('login');
        }
    }
}
