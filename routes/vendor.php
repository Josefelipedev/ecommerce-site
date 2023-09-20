<?php

use App\Http\Controllers\Backend\VendorController;
use Illuminate\Support\Facades\Route;


/** Vendo routes**/
Route::get('dashboard', [VendorController::class , 'dashboard'])->name('dashboard');
