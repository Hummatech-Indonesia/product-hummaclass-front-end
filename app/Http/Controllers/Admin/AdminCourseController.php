<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminCourseController extends Controller
{
    public function index()
    {
        // return view('admin.pages.kursus.index');
        return view('admin.pages.modul.index');
    }

    public function show()
    {
        return view('admin.pages.courses.detail');
    }
    public function create()
    {
        return view('admin.pages.courses.create');
    }
    public function edit()
    {
        return view('admin.pages.courses.edit-fix');
    }
}
