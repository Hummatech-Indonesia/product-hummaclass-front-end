<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function getDashboard()
    {
        return view('user.pages.dashboard.user.index');
    }
}
