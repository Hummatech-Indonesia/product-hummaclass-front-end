<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        return view('user.pages.courses.index');
    }

    public function showQuiz($id)
    {
        // dd($id);
        return view('user.pages.courses.quizz', compact('id'));
    }

    public function show($id)
    {
        return view('user.pages.courses.details', compact('id'));
    }

    public function student()
    {
        return view('user.pages.dashboard.student.courses');
    }

    public function courseLesson($id)
    {
        return view('user.pages.courses.courses-lesson', compact('id'));
    }
}
