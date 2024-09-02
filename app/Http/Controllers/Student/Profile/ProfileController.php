<?php

namespace App\Http\Controllers\Student\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index() {
        return view('dashboard.student.profile');
    }
}
