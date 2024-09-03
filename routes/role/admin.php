<?php

use App\Http\Controllers\Admin\ModuleController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () { 
    Route::get('admin', function () {
        return view('admin.index');
    })->name('admin.index');

    Route::get('category', function () {
        return view('admin.pages.categories.index');
    })->name('category.index');

    Route::get('kursus', function () {
        return view('admin.pages.kursus.index');
    })->name('kursus.index');

    Route::resource('modules', ModuleController::class)->only('index');

    Route::get('admin/users', function(){
        return view('admin.pages.users.index');
    })->name('users.index');

    Route::get('admin/detail-users', function(){
        return view('admin.pages.users.detail-users');
    })->name('detail-users.index');
});

