<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('cafeteria', function () {
    return view('cafeteria');
});
Route::get('cafeteria/{marca}', function () {
    return view('cafeteria');
});
Route::get('cafeteria/{modeloi}', function () {
    return view('cafeteria');
});
Route::get('cafeteria/{tipodecafe}', function () {
    return view('cafeteria');
});
Route::get('cafeteria-{capacidad}', function () {
    return view('cafeteria');
});