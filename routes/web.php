<?php

use App\Http\Controllers\EditorController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PostController;
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