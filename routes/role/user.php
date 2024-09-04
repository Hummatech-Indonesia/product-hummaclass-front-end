<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\Student\Profile\ProfileController;
use App\Http\Controllers\dashboard\StudentDashboardController;

Route::prefix('dashboard')->name('dashboard.')->group(function () {
    Route::resource('courses', CourseController::class)->only(['index', 'show']);
    
    Route::prefix('student')->name('student.')->group(function ()  {
        Route::get('', [StudentDashboardController::class,'index'])->name('dashboard');
        Route::get('profile', [ProfileController::class, 'index'])->name('profile');
        Route::get('courses', [CourseController::class, 'student'])->name('courses');
    });
}