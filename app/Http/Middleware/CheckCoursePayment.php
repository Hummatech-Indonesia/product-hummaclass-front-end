<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\Response;

class CheckCoursePayment
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $token = session('hummaclass-token');

        try {
            $response = Http::withToken($token)
                ->maxRedirects(5)
                ->get(config('app.api_url') . "/api/course-by-submodule/$request->id");
            $courseSlug = $response->json()['data']['slug'];

            $response = Http::withToken($token)
                ->maxRedirects(5)
                ->post(config('app.api_url') . '/api/user-courses-check', ['course_slug' => $courseSlug]);

            if ($response->successful()) {
                return $next($request);
            } else {
                return redirect()->route('checkout.course', $courseSlug)->with('error', 'Silahkan daftar kursus terlebih dahulu');
            }
        } catch (\Exception $e) {
            // \Log::error('API request error: ' . $e->getMessage());
            // return redirect()->route('login');
            dd($e);
        }
        return $next($request);
    }
}
