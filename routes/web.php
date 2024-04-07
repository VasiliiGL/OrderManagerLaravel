<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
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
Route::get('/ordersAll',[OrderController::class, 'ordersAll'])->name('ordersAll');
Route::get('/ordersorganization',[OrderController::class, 'ordersorganization'])->name('ordersorganization');
// По детальная карточка  заказа
Route::get('/orders/{id}',[OrderController::class, 'show'])->name('orders.show');

Route::get('/organizationsAll',[OrganizationController::class, 'index'])->name('organizations.index');
Route::get('/organizations/{id}',[OrganizationController::class, 'organization'])->name('organizations.show');
Route::get('/orgConnection',[OrganizationController::class, 'orgConnection'])->name('organizations.orgConnection');

//Страница номенклатура заказа

Route::get('/nomenclature/{id}', [OrderController::class,'nomenclature'])->name('nomenclature');

Route::middleware("auth")->group(function(){
    Route::get('/logout',[AuthController::class, 'logout'])->name('logout');
    Route::get('/addorderdetail/{id}',[OrderController::class,'addorderdetails'])->name('addorderdetails');
    Route::post('/addorderdetail_process', [OrderController::class, 'addorderdetailProcess'])->name('addorderdetail_process');
});

Route::middleware("guest")->group(function(){
    Route::get('/login',[AuthController::class, 'showLoginform'])->name('login');
    Route::post('/login_process',[AuthController::class, 'login'])->name('login_process');
    Route::get('/register',[AuthController::class, 'showRegisterform'])->name('register');
    Route::post('/register_process',[AuthController::class, 'register'])->name('register_process');
    Route::get('/customer',[CustomerController::class, 'showLoginform'])->name('customer.login');
    Route::get('/customerregister',[CustomerController::class, 'showRegisterform'])->name('customer.register');
    Route::post('/customerlogin_process',[CustomerController::class, 'login'])->name('customer.login_process');
    Route::post('/customerregister_process',[AuthController::class, 'register'])->name('customer.register_process');
    Route::get('/customerlogout',[AuthController::class, 'logout'])->name('customer.logout');
});

