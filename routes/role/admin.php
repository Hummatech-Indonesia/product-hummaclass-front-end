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



    Route::resources([
        'categories' => CategoryController::class,
        'courses' => AdminCourseController::class,
        'users' => UserController::class,
        'modules' => ModuleController::class,
        'sub-modules' => AdminSubModuleController::class
    ]);


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
