<?php

use Illuminate\Support\Facades\Route;

Route::prefix('mentor')->group(function () {
    Route::get('classrooms', fn() => view('mentor.pages.classroooms.index'))->name('mentor.home');
    Route::get('classrooms/{id}', fn() => view('mentor.pages.classroooms.detail'))->name('mentor.classroom.detail');

    Route::get('challenges', fn() => view('mentor.pages.challenges.index'))->name('challenge.index');
});