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
// Employee Routes
Route::get('/employees', [App\Http\Controllers\API\EmployeesController::class, 'index']);
Route::post('/employees', [App\Http\Controllers\API\EmployeesController::class, 'store']);
Route::get('/employees/{id}', [App\Http\Controllers\API\EmployeesController::class, 'show']);
Route::put('/employees/{id}', [App\Http\Controllers\API\EmployeesController::class, 'update']);
Route::delete('/employees/{id}', [App\Http\Controllers\API\EmployeesController::class, 'destroy']);
// Purchase Routes
Route::post('/purchases', [App\Http\Controllers\API\PurchaseController::class, 'store']);
Route::get('/purchases/{id}', [App\Http\Controllers\API\PurchaseController::class, 'show']);
Route::get('/purchases', [App\Http\Controllers\API\PurchaseController::class, 'index']);
Route::put('/purchases/{id}', [App\Http\Controllers\API\PurchaseController::class, 'update']);
Route::delete('/purchases/{id}', [App\Http\Controllers\API\PurchaseController::class, 'destroy']);