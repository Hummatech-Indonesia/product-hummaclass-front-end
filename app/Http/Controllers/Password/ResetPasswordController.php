<?php

namespace App\Http\Controllers\Password;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ResetPasswordController extends Controller
{
    public function email():View {
        return view('auth.passwords.email');
    }
    public function reset():View {
        return view('auth.passwords.reset');
    }
}
