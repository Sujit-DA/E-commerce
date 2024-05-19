<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [App\Http\Controllers\SiteController::class, 'getHome']);

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

//category
Route::get('/add/category', [App\Http\Controllers\HomeController::class, 'getAddCategory'])->name('getAddCategory');
Route::post('/add/category', [App\Http\Controllers\HomeController::class, 'postAddCategory'])->name('postAddCategory');
Route::get('manage/category',[App\Http\Controllers\HomeController::class, 'getManageCategory'])->name('getManageCategory');

//product
Route::get('/add/product', [App\Http\Controllers\HomeController::class, 'getAddProduct'])->name('getAddProduct');
Route::post('/add/product', [App\Http\Controllers\HomeController::class, 'postAddProduct'])->name('postAddProduct');
Route::get('manage/product',[App\Http\Controllers\HomeController::class, 'getManageProduct'])->name('getManageProduct');

Route::get('delete/product/{product}',[App\Http\Controllers\HomeController::class, 'getDeleteProduct'])->name('getDeleteProduct');
Route::get('edit/product/{product}',[App\Http\Controllers\HomeController::class, 'getEditProduct'])->name('getEditProduct');

//salon
Route::get('/', function () {
    return view('index');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/stylists', function () {
    return view('stylists');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/booking', function () {
    return view('booking');
});

Route::post('/submit-booking', [BookingController::class, 'submit']);