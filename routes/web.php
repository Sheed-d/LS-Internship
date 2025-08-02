<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;

// 🌐 Public Routes
Route::get('/', fn() => view('welcome'));

Route::view('/register', 'auth.register')->name('register');
Route::post('/register', [RegisterController::class, 'store']);
Route::post('/custom-register', [AuthController::class, 'register'])->name('custom.register');

// 🛡️ Login Routes with Session Middleware
Route::middleware(['web'])->group(function () {
    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'store']);
});

// 📄 Public Post View
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
Route::get('/test', fn() => 'Web routes are working!');

// 🔐 Protected Routes (Auth Required)
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', fn() => view('dashboard'))->name('dashboard');

    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/profile/view', [ProfileController::class, 'edit'])->name('profile.show');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// 📦 Laravel Breeze or Fortify routes
require __DIR__.'/auth.php';