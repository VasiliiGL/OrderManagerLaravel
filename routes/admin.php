<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ManagementController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\OrganizationController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::get('management', [ManagementController::class, 'index'])->name('management');
Route::post('login_process', [AuthController::class, 'login'])->name('login_process');
Route::middleware("guest:admin")->group(function(){
 
});

Route::middleware("auth:admin")->group(function(){
    Route::resource('posts', PostController::class);
    Route::resource ('orders', OrderController::class);
    Route::resource ('customers', CustomerController::class);
    Route::resource ('organizations', OrganizationController::class);
    Route::resource ('users', UserController::class);
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

});


