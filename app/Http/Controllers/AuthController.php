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

        $nextUrl = session('next-request');
        Session::forget('next-request');

        // return [session('hummaclass-token'), session('user')];
        return response()->json(['success' => true, 'next-url' => $nextUrl]);
    }

    public function saveTokenGoogle($data)
    {   
        dd(json_decode($data));
        Session::put('hummaclass-token', json_decode($data)['token']);
        Session::put('user', (array) json_decode($data)['user']);
        
        return redirect()->route('dashboard.users.dashboard');
    }


    public function receiveToken()
    {
        return view('auth.get-token-google');
    }
    public function logout()
    {
        Session::forget('hummaclass-token');
        Session::forget('user');
        Session::forget('next-request');
        return redirect()->route('login');
    }
}
