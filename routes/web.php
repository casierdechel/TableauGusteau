<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\ReservasiController;

Route::get('/', [ReservasiController::class, 'create']);
Route::post('/reservasi', [ReservasiController::class, 'store']);
