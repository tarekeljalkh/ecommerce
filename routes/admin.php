<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->middleware(['auth', 'role:admin'])->name('admin.dashboard'); because we added the prefix and route prefix and middleware inside RouteServiceProvider

Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

//Profile Routes
Route::get('profile', [ProfileController::class, 'index'])->name('profile');
Route::put('profile/update', [ProfileController::class, 'updateProfile'])->name('profile.update');
Route::put('profile/update/password', [ProfileController::class, 'updatePassword'])->name('password.update');
