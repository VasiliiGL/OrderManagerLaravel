<?php

use App\Http\Controllers\Customer\AuthController;
use App\Http\Controllers\Customer\OrderController;
use Illuminate\Support\Facades\Route;

Route::resource('orders', OrderController::class);
//Route::get('/orders/{id}',[OrderController::class, 'show'])->name('orders.show');
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::get('/register', [AuthController::class, 'registerForm'])->name('register');
Route::post('/register_process', [AuthController::class, 'register'])->name('register_process');
Route::post('/login_process', [AuthController::class, 'login'])->name('login_process');

Route::get('/mycreateOrderForm/{id}', [OrderController::class, 'mycreateOrderForm'])->name('mycreateOrder');
Route::post('/mycreateOrderForm_process', [OrderController::class, 'mycreateOrderForm_process'])->name('mycreateOrder_process');

Route::get('/showAll/{id}',[OrderController::class, 'showAll'])-> name('orders.showAll');
//Route::get('/showorder/{id}',[OrderController::class, 'show'])-> name('orders.show');

Route::get('/createOrderForm/{id}', [OrderController::class, 'createOrderForm'])->name('createOrderForm');
Route::post('/createOrderForm_process', [OrderController::class, 'createOrderFormProcess'])->name('createOrderForm_process');