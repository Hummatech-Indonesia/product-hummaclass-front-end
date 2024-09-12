<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ModuleController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AdminCourseController;
use App\Http\Controllers\Admin\AdminSubModuleController;
use App\Http\Middleware\CustomAuthMiddleware;

Route::get('testing', function() {

})->middleware('auth_custom');

Route::prefix('admin')->name('admin.')->middleware('auth_custom')->group(function () {

    Route::get('home', function () {
        return view('admin.index');
    })->name('home');

    Route::get('categories', function () {
        return view('admin.pages.categories.index');
    })->name('categories.index');

    Route::get('module-questions', function () {
        return view('admin.pages.courses.modules.module-questions.index');
    });
    Route::get('module-questions-create', function () {
        return view('admin.pages.courses.modules.module-questions.create');
    });

    Route::resources([
        'categories' => CategoryController::class,
        'courses' => AdminCourseController::class,
        'users' => UserController::class,
        'modules' => ModuleController::class,
        'sub-modules' => AdminSubModuleController::class
    ]);


    Route::get('courses/detail', function () {
        return view('admin.pages.courses.detail');
    });

    Route::get('courses/detail/edit', function () {
        return view('admin.pages.courses.edit');
    });

    Route::get('courses/detail-2', function () {
        return view('admin.pages.courses.panes.moduls.detail-2');
    });

    Route::get('create-modul/{course}', function () {
        return view('admin.pages.courses.panes.moduls.create-modul');
    })->name('create-moduls.index');

    Route::get('create-materi', function () {
        return view('admin.pages.courses.panes.moduls.create-materi');
    })->name('create-materi.index');

    Route::get('create-task', function () {
        return view('admin.pages.courses.panes.moduls.create-task');
    })->name('create-task.index');

    Route::get('question-bank', function () {
        return view('admin.pages.question-bank.index');
    })->name('question-bank.index');
});
