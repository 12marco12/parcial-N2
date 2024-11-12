<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use app\Controllers\cafeteriaController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('cafeteria', [cafeteriaController::class, 'show']);
Route::post('cafeteria', [CafeteriaController::class, 'store']);
Route::delete('cafeteria/{marca}', [CafeteriaController::class, 'delete']);