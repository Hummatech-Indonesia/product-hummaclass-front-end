<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{    
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        return view('admin.pages.categories.index');
    }
}
