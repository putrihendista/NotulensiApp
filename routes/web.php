<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Undangan;
use App\Livewire\UndanganLainnya;
use App\Livewire\UploadUndangan;
use App\Livewire\Sidebar;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/undangan', Undangan::class);
Route::get('/undanganlainnya', UndanganLainnya::class);
Route::get('/sidebar', Sidebar::class);
Route::get('/uploadUndangan', UploadUndangan::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
