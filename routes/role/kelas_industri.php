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
        Route::get('/create-school', function () {
            return view('Kelas-Industri.admin.school.create');
        })->name('school.create');
        Route::get('/edit-school/{id}', function ($id) {
            return view('Kelas-Industri.admin.school.edit', compact('id'));
        })->name('school.edit');
    });
});