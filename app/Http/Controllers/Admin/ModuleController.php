<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function index() {
        return view('admin.pages.modul.index');
    }
    public function show() {
        return view('admin.pages.courses.detail-2');
    }
}
