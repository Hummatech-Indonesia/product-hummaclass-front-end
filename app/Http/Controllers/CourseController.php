<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index() {
        return view('courses.index');
    }

    public function show() {
        return view('courses.details');
    }


    public function student() {
        return view('dashboard.student.courses');
    }
}
