<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product-name', function () {
    return view('pages.product-name');
})->name('product-name');

Route::get('/add-bom', function () {
    return view('pages.add-bom');
})->name('add-bom');

Route::get('/bom-overview', function () {
    return view('pages.bom-overview');
})->name('bom-overview');

Route::get('/manufacturing-orders', function () {
    return view('pages.manufacturing-orders');
})->name('manufacturing-orders');
