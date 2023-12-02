<?php

use App\Http\Controllers\EditorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/', function () {
    return view('about');
});
Route::get('/', function () {
    return view('contact');
});


Route::get('/editor',[EditorController::class, 'index'])->name('index');
Route::get('/store',[EditorController::class, 'store'])->name('store');

