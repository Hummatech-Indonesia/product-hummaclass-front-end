<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function index()
    {
        return view('admin.pages.modul.index');
    }
    public function show(string $id)
    {
        return view('admin.pages.courses.panes.moduls.detail-2', compact('id'));
    }

    public function create(string $id)
    {
        return view('admin.pages.courses.panes.moduls.create-modul', compact('id'));
    }
    public function edit(string $id)
    {
        return view('admin.pages.courses.panes.moduls.edit-modul', compact('id'));
    }
}
