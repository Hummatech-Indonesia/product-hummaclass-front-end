<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminPointExchangeController extends Controller
{
    /**
     * Method index
     *
     * @return View
     */
    public function index(): View
    {
        return view('admin.pages.point-exchange.index');
    }
}