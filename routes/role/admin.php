<?php

use App\Http\Controllers\Admin\AdminCourseController;
use App\Http\Controllers\Admin\AdminSubModuleController;
use App\Http\Controllers\Admin\ModuleController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::get('', function () {
        return view('admin.index');
    })->name('admin.index');

    Route::get('category', function () {
        return view('admin.pages.categories.index');
    })->name('category.index');

    Route::resource('courses', AdminCourseController::class)->only(['index', 'create', 'edit']);
    Route::get('sub-modules', [AdminSubModuleController::class, 'show'])->name('sub-modules.show');

    Route::get('kursus/detail', function () {
        return view('admin.pages.kursus.detail');
    });

    Route::get('kursus/detail/edit',function(){
        return view('admin.pages.kursus.edit');
    });

    Route::get('kursus/detail-2', function () {
        return view('admin.pages.kursus.detail-2');
    });

    Route::resource('modules', ModuleController::class);
    
    Route::get('users', function(){
        return view('admin.pages.users.index');
    })->name('users.index');

    Route::get('detail-users', function(){
        return view('admin.pages.users.detail-users');
    })->name('detail-users.index');
});

