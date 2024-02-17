<?php

use App\Http\Controllers\Customer\OrderController;
use Illuminate\Support\Facades\Route;

Route::resource('orders', OrderController::class);