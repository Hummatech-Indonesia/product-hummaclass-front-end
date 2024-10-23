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

        // try {
            if (session('user')['roles'][0]['name'] == 'admin') {
                return $next($request);
            }
            $response = Http::withToken($token)
                ->maxRedirects(5)
                ->get(config('app.api_url') . "/api/course-by-submodule/$request->id");

                // dd($response);
                $courseSlug = $response->json()['data']['slug'];

            $response = Http::withToken($token)
                ->maxRedirects(5)
                ->post(config('app.api_url') . '/api/user-courses-check', ['course_slug' => $courseSlug]);

                // dd($response);
            if ($response->successful()) {
                return $next($request);
            } else if ($response->json()['data'] == null) {
                return redirect()->route('checkout.course', $courseSlug)->with('error', 'Silahkan daftar kursus terlebih dahulu');
            } else if ($response->json()['data']['course']['is_premium']) {
                return redirect()->route('checkout.course', $courseSlug);
            } else {
                return redirect()->route('checkout.course', $courseSlug)->with('error', 'Silahkan daftar kursus terlebih dahulu');
            }
        // } catch (\Exception $e) {
        //     dd($e);
        // }
        // return $next($request);
    }
}
