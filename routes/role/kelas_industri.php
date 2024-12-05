<?php

use App\Http\Controllers\LearningPathController;
use App\Http\Controllers\Student\DashboardController;
use Illuminate\Support\Facades\Route;


Route::prefix('dashboard')->name('dashboard.')->group(function () {
    Route::prefix('students')->name('students.')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('index');
        Route::get('classes', [DashboardController::class, 'classes'])->name('classes.index');
        Route::get('ranks', [DashboardController::class, 'ranks'])->name('ranks.index');
        Route::get('events', [DashboardController::class, 'events'])->name('events.index');
    });


    Route::prefix('teacher')->name('teacher.')->group(function () {
        Route::get('dashboard', fn() => view('teacher.pages.dashboard.index'))->name('index')->middleware('teacher');
        Route::get('classroom', function () {
            return view('teacher.pages.classroom.index');
        })->name('classroom');
        Route::get('classroom-details', function () {
            return view('teacher.pages.classroom.class-detail');
        })->name('classroom-details');
        Route::get('journal', function () {
            return view('teacher.pages.journal.index');
        })->name('journal');
        Route::get('journal-create', function () {
            return view('teacher.pages.journal.create');
        })->name('journal-create');
        Route::get('journal-detail', function () {
            return view('teacher.pages.journal.detail');
        })->name('journal-detail');
        Route::get('raport', function () {
            return view('teacher.pages.raport.index');
        })->name('raport');
        Route::get('test', function () {
            return view('teacher.pages.test.index');
        })->name('test');
        Route::get('ranking', fn() => view('mentor.pages.ranking.index'))->name('ranking');
    });

    Route::prefix('students-ki')->name('students-ki.')->group(function () {
        Route::get('/', function () {
            return view('user.pages.dashboard.student-ki.index');
        })->name('index');
        Route::get('course-list', function () {
            return view('user.pages.dashboard.student-ki.course-list.index');
        })->name('course-list');
        Route::get('events-list', function () {
            return view('user.pages.dashboard.student-ki.events-list.index');
        })->name('events-list');
        Route::get('reviews', function () {
            return view('user.pages.dashboard.student-ki.reviews.index');
        })->name('reviews');
        Route::get('transaction-history', function () {
            return view('user.pages.dashboard.student-ki.transaction-history.index');
        })->name('transaction-history');

        Route::get('profile', fn() => view('user.pages.dashboard.student-ki.profile.index'))->name('profile');
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
        
        Route::prefix('learning-paths')->name('learning-paths.')->group(function () {
            Route::get('/', [LearningPathController::class, 'index'])->name('index');
            Route::get('/create', [LearningPathController::class, 'create'])->name('create');
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
            Route::get('edit/{id}', function ($id) {
                return view('Kelas-Industri.admin.school.details.student-components.edit-student', compact('id'));
            })->name('edit');
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

    Route::prefix('exams')->name('exams.')->group(function () {
        Route::get('/', function () {
            return view('admin.pages.exams.assesments.index');
        })->name('index');
        Route::get('assessment-settings', function () {
            return view('admin.pages.exams.assessment-settings.index');
        })->name('assessment-settings');
        Route::get('assessment-settings-format/{division_id}/{class_level}', function ($division_id, $class_level) {
            return view('admin.pages.exams.assessment-settings.settings', compact('division_id', 'class_level'));
        })->name('assessment-settings-format');
    });

    Route::get('mentor', fn() => view('admin.pages.mentor.index'))->name('mentor.index')->middleware('mentor');
});
