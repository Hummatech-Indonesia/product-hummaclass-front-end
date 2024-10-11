<?php

namespace App\Http\Controllers;

use App\Helpers\ShareHelper;
use Jorenvh\Share\Share;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        return view('user.pages.courses.index');
    }

    public function showQuiz($id)
    {
        return view('user.pages.courses.quizz', compact('id'));
    }

    public function show($id)
    {
        $shareLink = ShareHelper::shareLink($id);
        return view('user.pages.courses.details', compact('id', 'shareLink'));
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
