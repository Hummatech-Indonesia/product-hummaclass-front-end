<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ModuleController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AdminCourseController;
use App\Http\Controllers\Admin\AdminSubModuleController;

Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('', function () {
        return view('admin.index');
    })->name('index');

    Route::get('categories', function () {
        return view('admin.pages.categories.index');
    })->name('categories.index');


    Route::resource('categories', CategoryController::class)->only(['index']);
    Route::resource('courses', AdminCourseController::class)->only(['index', 'show', 'create']);
    Route::resource('users', UserController::class)->only(['index', 'show']);
    Route::resource('modules', ModuleController::class)->only(['index', 'show']);
    Route::resource('sub-modules', AdminSubModuleController::class)->only(['index']);

    Route::get('kursus/detail', function () {
        return view('admin.pages.kursus.detail');
    });

    Route::get('kursus/detail/edit', function () {
        return view('admin.pages.kursus.edit');
    });

    Route::get('kursus/detail-2', function () {
        return view('admin.pages.kursus.detail-2');
    });
});
