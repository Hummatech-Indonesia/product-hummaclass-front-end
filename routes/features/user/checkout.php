<?php

use App\Http\Controllers\UserCheckoutController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth_custom')->group(function() {
    Route::get('checkout/event/{slug}', [UserCheckoutController::class, 'index'])->name('checkout.event');
    Route::get('checkout/course/{slug}', [UserCheckoutController::class, 'index'])->name('checkout.course');
    Route::get('transaction/event/{reference}/detail', [UserCheckoutController::class, 'show'])->name('checkout.event.show');
    Route::get('transaction/course/{reference}/detail', [UserCheckoutController::class, 'show'])->name('checkout.course.show');
});