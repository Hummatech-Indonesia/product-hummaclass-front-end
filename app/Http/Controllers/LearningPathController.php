<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class LearningPathController extends Controller
{
    public function index(): View
    {
        return view('Kelas-Industri.admin.learning-paths.index');
    }

    public function create(): View
    {
        return view('Kelas-Industri.admin.learning-paths.create');
    }
}
