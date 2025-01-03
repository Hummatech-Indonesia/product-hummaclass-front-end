<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminCourseController extends Controller
{
    public function index()
    {
        return view('admin.pages.courses.index');
    }
    public function show(string $id)
    {
        return view('admin.pages.courses.detail', compact('id'));
    }
    public function create()
    {
        return view('admin.pages.courses.create');
    }
    public function edit($id)
    {
        return view('admin.pages.courses.edit', compact('id'));
    }

    public function DetailTest($id)
    {
        return view('admin.pages.courses.panes.test.detail-test', compact('id'));
    }
}
