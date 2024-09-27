<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index()
    {
        return view('admin.pages.users.index');
    }

    public function show(string $id)
    {
        return view('admin.pages.users.detail-users', compact('id'));
    }
}
