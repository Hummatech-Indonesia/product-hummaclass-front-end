<?php

use Illuminate\Support\Facades\Route;

Route::prefix('mentor')->group(function () {
    Route::get('home', fn() => view('mentor.pages.index'))->name('mentor.home');
    Route::get('', fn() => view('mentor.pages.index'))->name('mentor.home');
});
