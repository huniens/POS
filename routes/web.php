<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;

// Home Page
Route::get('/', [HomeController::class, 'index'])->name('home');

// Product Pages with route prefix
Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [ProductController::class, 'foodBeverage'])->name('category.food-beverage');
    Route::get('/beauty-health', [ProductController::class, 'beautyHealth'])->name('category.beauty-health');
    Route::get('/home-care', [ProductController::class, 'homeCare'])->name('category.home-care');
    Route::get('/baby-kid', [ProductController::class, 'babyKid'])->name('category.baby-kid');
});

// User Page with route parameter
Route::get('/user/{id}/name/{name}', [UserController::class, 'profile'])->name('user.profile');

// Sales Page
Route::get('/sales', [SalesController::class, 'index'])->name('sales');

