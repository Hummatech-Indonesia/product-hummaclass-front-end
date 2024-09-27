<?php

use App\Http\Controllers\UserCheckoutController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth_custom')->group(function() {
    Route::get('checkout/{slug}', [UserCheckoutController::class, 'index'])->name('checkout');
    Route::get('transaction/{reference}/detail', [UserCheckoutController::class, 'show'])->name('checkout.show');
});