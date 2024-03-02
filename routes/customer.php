<?php

use App\Http\Controllers\Customer\AuthController;
use App\Http\Controllers\Customer\OrderController;
use Illuminate\Support\Facades\Route;

Route::resource('orders', OrderController::class);
//Route::get('/orders/{id}',[OrderController::class, 'show'])->name('orders.show');
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login_process', [AuthController::class, 'login'])->name('login_process');
Route::get('customer/orders/showAll/{id}',[OrderController::class, 'showAll'])-> name('orders.showAll');