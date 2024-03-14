<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Dashboard Route
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

//Posts Route
Route::get('/post-detail/{id}', [DashboardController::class, 'show'])->name('post');

//About Route
Route::get('/about', [AboutController::class, 'index'])->name('about');

//Blog Route
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog-detail/{id}', [BlogController::class, 'show'])->name('blog-detail');
