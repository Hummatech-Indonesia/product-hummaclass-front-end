<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function saveToken(Request $request)
    {
        Session::put('hummaclass-token', $request->token);
        Session::put('user', $request->user);

        // return [session('hummaclass-token'), session('user')];
        return response()->json(['success' => true]);
    }

    public function saveTokenGoogle(Request $request)
    {
        Session::put('hummaclass-token', $request->token);
        Session::put('user', (array) json_decode($request->user, true));

        return redirect()->route('dashboard.users.dashboard');
    }


    public function receiveToken() {
        return view('auth.get-token-google');
    }
    public function logout()
    {
        Session::forget('hummaclass-token');
        Session::forget('user');
        return redirect()->route('login');
    }
}