<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminPointExchangeController extends Controller
{
    public function index()
    {
        return view('admin.pages.point-exchange.index');
    }
}