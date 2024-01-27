<?php

use App\Http\Controllers\Backend\VendorController;
use Illuminate\Support\Facades\Route;

// Route::get('vendor/dashboard', [VendorController::class, 'dashboard'])->middleware(['auth', 'role:vendor'])->name('vendor.dashboard'); same as admin.php

Route::get('dashboard', [VendorController::class, 'dashboard'])->name('dashboard');
