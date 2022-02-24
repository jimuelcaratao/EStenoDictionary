<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\User\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Normal Account without verification
Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
});

// Admin Account without verification
Route::middleware(['auth:sanctum', 'is_admin'])->group(function () {

    // dashboard pages
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Categories
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
    Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
    Route::delete('/categories/{category_id}', [CategoryController::class, 'destroy'])->name('categories.destroy');
    Route::put('/categories/update', [CategoryController::class, 'update'])->name('categories.update');


    // Users
    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::put('/users/update', [UserController::class, 'update'])->name('users.update');
    Route::post('/users/ban', [UserController::class, 'ban'])->name('user.ban');
});
