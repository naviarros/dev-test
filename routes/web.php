<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

Route::get('/dashboard', [CustomerController::class, 'index'])->name('dashboard');
