<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminSubModuleController extends Controller
{
    public function show(string $id)
    {
        return view('admin.pages.sub-modul.detail', compact('id'));
    }

    public function create(string $id)
    {
        return view('admin.pages.sub-modul.create-materi', compact('id'));
    }
}
