<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminSubModuleController extends Controller
{
    public function index()
    {
        return view('admin.pages.sub-modul.detail');
    }

    public function create(string $id)
    {
        return view('admin.pages.courses.panes.moduls.create-materi', compact('id'));
    }
}
