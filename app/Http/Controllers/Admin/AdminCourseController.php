<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminCourseController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        return view('admin.pages.courses.index');
    }

    /**
     * show
     *
     * @param  mixed $id
     * @return void
     */
    public function show(string $id)
    {
        return view('admin.pages.courses.detail', compact('id'));
    }

    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('admin.pages.courses.create');
    }

    /**
     * edit
     *
     * @param  mixed $id
     * @return void
     */
    public function edit($id)
    {
        return view('admin.pages.courses.edit-fix', compact('id'));
    }
}
