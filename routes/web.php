<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Undangan;
use App\Livewire\UndanganLainnya;
use App\Livewire\UploadUndangan;
use App\Livewire\Sidebar;
use App\Livewire\Notulensi;
use App\Livewire\TindakLanjutNotulensi;
use App\Livewire\TambahtindakLanjutNotulensi;
use App\Livewire\DaftarHadir;
use App\Livewire\TambahAnggota;
use App\Livewire\BeritaAcara;
use App\Livewire\UploadDokumen;
use App\Livewire\HalamanNotulensi;
use App\Livewire\HalamanDaftarHadir;
use App\Livewire\LihatDaftarHadir;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/undangan', Undangan::class);
Route::get('/undanganlainnya', UndanganLainnya::class);
Route::get('/sidebar', Sidebar::class);
Route::get('/uploadUndangan', UploadUndangan::class);
Route::get('/notulensi', Notulensi::class);
Route::get('/tindakLanjut', TindakLanjutNotulensi::class);
Route::get('/tambahtindakLanjut', TambahtindakLanjutNotulensi::class);
Route::get('/daftarhadir', DaftarHadir::class);
Route::get('/tambahanggota', TambahAnggota::class);
Route::get('/beritaacara', BeritaAcara::class);
Route::get('/uploaddokumen', UploadDokumen::class);
Route::get('/halamannotulensi', HalamanNotulensi::class);
Route::get('/halamandaftarhadir', HalamanDaftarHadir::class);
Route::get('/lihatdaftarhadir', LihatDaftarHadir::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
