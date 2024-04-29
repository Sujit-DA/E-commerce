<?php

use Illuminate\Support\Facades\Route;
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