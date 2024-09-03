<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminSubModuleController extends Controller
{
    public function show() {
        return view('admin.pages.sub-modul.detail');
    }
}
