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
        return response()->json(['success' => true]);
    }

    public function logout()
    {
        Session::forget('hummaclass-token');
        Session::forget('user');
        return redirect()->route('login');
    }
}
