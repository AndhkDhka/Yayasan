<?php

use Illuminate\Support\Facades\Route;

// ================= PUBLIC =================
use App\Http\Controllers\Public\HomeController;
use App\Http\Controllers\Public\ProfilController;
use App\Http\Controllers\Public\VisiMisiController;
use App\Http\Controllers\Public\KontakController;
use App\Http\Controllers\Public\PpdbController;
use App\Http\Controllers\Public\BeritaController;

/*
|--------------------------------------------------------------------------
| PUBLIC PAGES
|--------------------------------------------------------------------------
*/
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/profil', [ProfilController::class, 'index'])->name('profil');

Route::get('/programs', [VisiMisiController::class, 'index'])->name('programs');

Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');

/*
|--------------------------------------------------------------------------
| PPDB (PUBLIC FORM)
|--------------------------------------------------------------------------
*/
Route::get('/ppdb', [PpdbController::class, 'index'])->name('ppdb.index');
Route::post('/ppdb/submit', [PpdbController::class, 'submit'])->name('ppdb.submit');
/*
|--------------------------------------------------------------------------
| BERITA (PUBLIC)
|--------------------------------------------------------------------------
*/
Route::prefix('berita')->name('berita.')->group(function () {
    Route::get('/', [BeritaController::class, 'index'])->name('index');
    Route::get('/{slug}', [BeritaController::class, 'show'])->name('show');
});
