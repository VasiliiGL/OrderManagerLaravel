<?php

use App\Http\Controllers\EditorController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/',[IndexController::class, 'index'])->name('home');
 //->middleware("r");
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});


Route::get('/editor',[EditorController::class, 'index'])->name('index');
Route::get('/store',[EditorController::class, 'store'])->name('store');

