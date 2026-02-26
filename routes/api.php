<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CustomerController;

Route::prefix('customers')->group(function () {

    // List with pagination, filters, sorting
    Route::get('/', [CustomerController::class, 'index']);

    // Create a customer
    Route::post('/create', [CustomerController::class, 'store']);

    // Show single customer
    Route::get('/find/{customer}', [CustomerController::class, 'show']);

    // Update a customer
    Route::put('/update/{customer}', [CustomerController::class, 'update']);

    // Delete a customer
    Route::delete('/delete/{customer}', [CustomerController::class, 'destroy']);
});
