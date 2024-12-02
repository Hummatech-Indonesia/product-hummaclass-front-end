<?php

use App\Http\Controllers\Student\DashboardController;
use Illuminate\Support\Facades\Route;


Route::prefix('dashboard')->name('dashboard.')->group(function () {
    Route::prefix('students')->name('students.')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('index');
        Route::get('classes', [DashboardController::class, 'classes'])->name('classes.index');
        Route::get('ranks', [DashboardController::class, 'ranks'])->name('ranks.index');
        Route::get('events', [DashboardController::class, 'events'])->name('events.index');
    });

    Route::prefix('students-ki')->name('students-ki.')->group(function () {
        Route::get('/', function () {
            return view('user.pages.dashboard.student-ki.index');
        })->name('index');
        Route::get('course-list', function () {
            return view('user.pages.dashboard.student-ki.course-list');
        })->name('course-list');
        Route::get('events-list', function () {
            return view('user.pages.dashboard.student-ki.events-list');
        })->name('events-list');
        Route::get('reviews', function () {
            return view('user.pages.dashboard.student-ki.reviews');
        })->name('reviews');
        Route::get('transaction-history', function () {
            return view('user.pages.dashboard.student-ki.transaction-history');
        })->name('transaction-history');
    });

});

Route::middleware(['auth_custom', 'admin'])->prefix('admin')->name('admin.')->group(function () {

    // kelas industri
    Route::prefix('class')->name('class.')->group(function () {
        Route::prefix('school')->name('school.')->group(function () {
            Route::get('/', function () {
                return view('Kelas-Industri.admin.school.index');
            })->name('index');
            Route::get('/{slug}', function ($slug) {
                return view('Kelas-Industri.admin.school.details.detail', compact('slug'));
            })->name('show');
        });

        Route::prefix('division')->name('division.')->group(function () {
            Route::get('/', function () {
                return view('Kelas-Industri.admin.division.index');
            })->name('index');
        });

        Route::prefix('classroom')->name('classroom.')->group(function () {
            Route::get('create/{slug}', function ($slug) {
                return view('Kelas-Industri.admin.school.details.classroom-components.create-classroom', compact('slug'));
            })->name('create');
        });
        Route::prefix('teacher')->name('teacher.')->group(function () {
            Route::get('create/{slug}', function ($slug) {
                return view('Kelas-Industri.admin.school.details.teacher-components.create-teacher', compact('slug'));
            })->name('create');
            Route::get('{id}/edit', function ($id) {
                return view('Kelas-Industri.admin.school.details.teacher-components.edit-teacher', compact('id'));
            })->name('edit');
        });
        Route::prefix('student')->name('student.')->group(function () {
            Route::get('create/{slug}', function ($slug) {
                return view('Kelas-Industri.admin.school.details.student-components.create-student', compact('slug'));
            })->name('create');
        });

        // Route::get('create-classroom', function ($slug) {
        //     return view('Kelas-Industri.admin.school.details.classroom-components.create-classroom', compact('slug'));
        // });

        Route::get('/create-school', function () {
            return view('Kelas-Industri.admin.school.create');
        })->name('school.create');
        Route::get('/edit-school/{slug}', function ($id) {
            return view('Kelas-Industri.admin.school.edit', compact('id'));
        })->name('school.edit');
    });

    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        Route::get('school-year', [DashboardController::class, 'schoolYear'])->name('school-year.index');
    });

});
