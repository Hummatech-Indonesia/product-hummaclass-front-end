<?php

use Illuminate\Support\Facades\Route;

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
});
