<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index() {
        return view('user.pages.courses.index');
    }

    public function show() {
        return view('user.pages.courses.details');
    }   

    public function student() {
        return view('user.pages.dashboard.student.courses');
    }
}
