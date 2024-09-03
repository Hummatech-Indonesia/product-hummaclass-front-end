<?php

use App\Http\Controllers\Admin\AdminCourseController;
use App\Http\Controllers\Admin\ModuleController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () { 
    Route::get('admin', function () {
        return view('admin.index');
    })->name('admin.index');

    Route::get('category', function () {
        return view('admin.pages.categories.index');
    })->name('category.index');

    Route::resource('courses', AdminCourseController::class)->only(['index', 'create', 'edit']);

    Route::get('kursus/detail',function(){
        return view('admin.pages.kursus.detail');
    });

    Route::resource('modules', ModuleController::class);
    
    Route::get('admin/users', function(){
        return view('admin.pages.users.index');
    })->name('users.index');

    Route::get('admin/detail-users', function(){
        return view('admin.pages.users.detail-users');
    })->name('detail-users.index');
});

