<?php

use App\Http\Controllers\Api\AcaraController;
use App\Http\Controllers\Api\JabatanController;
use App\Http\Controllers\Api\RapatController;
use App\Http\Controllers\Api\UndanganController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('undangans', UndanganController::class);
Route::apiResource('jabatans', JabatanController::class);
Route::apiResource('acara', AcaraController::class);
Route::apiResource('rapats', RapatController::class);

