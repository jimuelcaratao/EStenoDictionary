<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\WordController;
use App\Http\Controllers\User\Gregg1Controller;
use App\Http\Controllers\User\Gregg2Controller;
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

Route::get('/about-us', function () {
    return view('about-us');
})->name('about');

// Normal Account without verification
Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::get('/gregg_1', [Gregg1Controller::class, 'index'])->name('gregg1');

    Route::get('/gregg_2', [Gregg2Controller::class, 'index'])->name('gregg2');
});

Route::post('/add_viewers', [WordController::class, 'add_viewers'])->name('viewers');

// Admin Account without verification
Route::middleware(['auth:sanctum', 'is_admin'])->group(function () {

    // dashboard pages
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // words
    Route::get('/words', [WordController::class, 'index'])->name('words');
    Route::post('/words', [WordController::class, 'store'])->name('words.store');
    Route::delete('/words/{word_id}', [WordController::class, 'destroy'])->name('words.destroy');
    Route::put('/words/update', [WordController::class, 'update'])->name('words.update');

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
