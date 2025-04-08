<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

Route::get('/admin', function () {
    return view('layouts.admin');
})->middleware('auth');

Auth::routes();

Route::middleware(['auth'])->prefix('admin')->group(function() {
    Route::resource('products', ProductController::class);
    Route::resource('categories', CategoryController::class);
});

Route::get('/', [FrontController::class, 'index'])->name('home.index');

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');
