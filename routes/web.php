<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\PostController;
use App\Models\Organization;
use Illuminate\Support\Facades\Route;

Route::get('/',[IndexController::class, 'index'])->name('home');
 //->middleware("r");
 Route::get('/posts',[PostController::class, 'index'])->name('posts.index');
 Route::get('/posts/{id}',[PostController::class, 'show'])->name('posts.show');


Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});


Route::get('/editor',[EditorController::class, 'index'])->name('index');
Route::get('/store',[EditorController::class, 'store'])->name('store');

// Страница со списком всех заказов
Route::get('/orders',[OrderController::class, 'index'])->name('orders.index');
// По детальная карточка  заказа
Route::get('/orders/{id}',[OrderController::class, 'show'])->name('orders.show');

Route::get('/organizations',[OrganizationController::class, 'index'])->name('organizations.index');
Route::get('/organizations/{id}',[OrganizationController::class, 'show'])->name('organizations.show');

Route::get('/login',[AuthController::class, 'showLoginform'])->name('login');
Route::get('/logout',[AuthController::class, 'logout'])->name('logout');
Route::post('/login_process',[AuthController::class, 'login'])->name('login_process');

Route::get('/register',[AuthController::class, 'showRegisterform'])->name('register');
Route::post('/register_process',[AuthController::class, 'register'])->name('register_process');
