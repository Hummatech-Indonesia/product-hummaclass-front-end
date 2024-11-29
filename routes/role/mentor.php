<?php

use Illuminate\Support\Facades\Route;

Route::prefix('mentor')->name('mentor.')->group(function () {
    Route::get('classrooms', fn() => view('mentor.pages.classroooms.index'))->name('classroom.index');
    Route::get('classrooms/{id}', fn($id) => view('mentor.pages.classroooms.detail'))->name('classroom.show');

    Route::get('challenges', fn() => view('mentor.pages.challenges.index'))->name('challenge.index');
    Route::get('challenges/{id}', fn($id) => view('mentor.pages.challenges.detail'))->name('challenge.show');
    Route::get('challenges-create', fn() => view('mentor.pages.challenges.create'))->name('challenge.create');

    Route::get('attendances', fn() => view('mentor.pages.attendances.index'))->name('attendance.index');
});
