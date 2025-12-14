<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ManufacturController;
use App\Http\Controllers\API\CustomerController;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Customer Routes
Route::post('/customer/create', [CustomerController::class, 'create']);
Route::put('/customer/update/{id}', [CustomerController::class, 'update']);
Route::delete('/customer/delete/{id}', [CustomerController::class, 'delete']);
Route::get('/customer/all', [CustomerController::class, 'getAll']);
// Manufactur Routes
Route::post('/manufactur/create', [ManufacturController::class, 'create']);
Route::put('/manufactur/update/{id}', [ManufacturController::class, 'update']);
Route::delete('/manufactur/delete/{id}', [ManufacturController::class, 'delete']);
Route::get('/manufactur/all', [ManufacturController::class, 'getAll']);