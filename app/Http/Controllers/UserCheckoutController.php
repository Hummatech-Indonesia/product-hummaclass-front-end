<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class UserCheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($slug)
    {
        $token = session('hummaclass-token');
        $response = Http::withToken($token)
            ->maxRedirects(5)
            ->post(config('app.api_url') . '/api/user-courses-check', ['course_slug' => $slug]);

            if($response->json()['data']['user_course']) {
                return redirect()->route('courses.courses.show', $slug)->with('warning', 'Anda sudah pernah melakukan checkout pada kursus ini');
            }
        return view('user.pages.checkout.index', compact('slug'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $reference)
    {
        // return view('user.pages.checkout.finish', compact('method', 'id'));
        return view('user.pages.checkout.detail', compact('reference'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
