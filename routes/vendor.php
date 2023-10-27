<?php

use App\Http\Controllers\Backend\VendorController;
use App\Http\Controllers\Backend\VendorProfileController;
use Illuminate\Support\Facades\Route;


/** Vendo routes**/
Route::get('dashboard', [VendorController::class , 'dashboard'])->name('dashboard');
Route::get('profile', [VendorProfileController::class , 'index'])->name('profile');
Route::put('profile', [VendorProfileController::class, 'updateVendor'])->name('vendor.update'); // vendor.profile.update
Route::post('profile', [VendorProfileController::class, 'updatePassword'])->name('vendor.update.password'); // vendor.profile.update


