<?php

use Illuminate\Support\Facades\Route;

Route::prefix('mentor')->name('mentor.')->group(function () {
    Route::get('/dashboard', fn() => view('mentor.pages.dashboard.index'))->name('dashboard.index');

    Route::get('classrooms', fn() => view('mentor.pages.classroooms.index'))->name('classroom.index');
    Route::get('classrooms/{slug}', fn($slug) => view('mentor.pages.classroooms.detail', compact('slug')))->name('classroom.show');

    Route::get('challenges', fn() => view('mentor.pages.challenges.index'))->name('challenge.index');
    Route::get('challenges/{slug}/edit', fn($slug) => view('mentor.pages.challenges.edit', compact('slug')))->name('challenge.edit');
    Route::get('challenges/{slug}', fn($slug) => view('mentor.pages.challenges.detail', compact('slug')))->name('challenge.show');
    Route::get('challenges-create', fn() => view('mentor.pages.challenges.create'))->name('challenge.create');

    Route::get('attendances', fn() => view('mentor.pages.attendances.index'))->name('attendance.index');
    Route::get('attendance-detail/{slug}', fn($slug) => view('mentor.pages.attendances.detail', compact('slug')))->name('attendance.detail');

    Route::get('journals', fn() => view('mentor.pages.journals.index'))->name('journal.index');

    Route::get('ranking', fn() => view('mentor.pages.ranking.index'))->name('ranking.index');

    Route::get('profile', fn() => view('admin.pages.profile.index'))->name('profile.index');
});