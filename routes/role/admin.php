<?php

use Illuminate\Support\Facades\Route;

Route::get('admin/admin', function(){
    return view('admin.index');
})->name('admin.index');

Route::get('admin/category', function(){
    return view('admin.pages.categories.index');
})->name('category.index');

Route::get('admin/kursus', function(){
    return view('admin.pages.kursus.index');
})->name('kursus.index');