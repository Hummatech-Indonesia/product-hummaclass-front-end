<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        return view('student.pages.dashboard.index');
    }
    public function classes(): View
    {
        return view('student.pages.dashboard.classes.index');
    }
    public function ranks(): View
    {
        return view('student.pages.dashboard.ranks.index');
    }
    public function events(): View
    {
        return view('student.pages.dashboard.events.index');
    }
    public function schoolYear(): View
    {
        return view('Kelas-industri.admin.school-year.index');
    }
}
