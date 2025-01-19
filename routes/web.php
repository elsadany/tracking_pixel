<?php

use App\Http\Controllers\TrackingPixelController;
use Illuminate\Support\Facades\Route;
//test routes
Route::get('/', function () {
    return view('welcome');
});
Route::get('/products', function () {
    return view('welcome');
});
Route::get('/products/{id}', function () {
    return view('welcome');
});
//track route 
Route::get('/track', [TrackingPixelController::class, 'track'])->name('track');
Route::get('tracking', [TrackingPixelController::class, 'index']);
