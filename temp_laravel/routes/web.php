<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Import Controllers
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\PageController;
use App\Models\Berita;

/*
|--------------------------------------------------------------------------
| Public Routes (Akses Umum)
|--------------------------------------------------------------------------
*/

// Home Page
Route::get('/', function () {
    $berita = Berita::latest()->limit(6)->get();
    return view('welcome', compact('berita'));
})->name('home');

// Public Resources (Read Only)
Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('berita.show');

Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri.index');
Route::get('/galeri/{id}', [GaleriController::class, 'show'])->name('galeri.show');

Route::get('/dokumen', [DokumenController::class, 'index'])->name('dokumen.index');
Route::get('/dokumen/{id}', [DokumenController::class, 'show'])->name('dokumen.show');

Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda.index');
Route::get('/agenda/{id}', [AgendaController::class, 'show'])->name('agenda.show');

// Profil Routes
Route::prefix('profil')->name('profil.')->group(function () {
    Route::get('/gambaran-umum', [PageController::class, 'gambaranUmum'])->name('gambaranumum');
    Route::get('/visi-misi', [PageController::class, 'visiMisi'])->name('visimisi');
    Route::get('/struktur-organisasi', [PageController::class, 'strukturOrganisasi'])->name('struktur');
    
    // Debug routes temporarily removed from group
});

// Layanan Routes
Route::prefix('layanan')->name('layanan.')->group(function () {
    Route::get('/', [PageController::class, 'layanan'])->name('index');
    Route::get('/bidang/{slug}', [PageController::class, 'bidangDetail'])->name('bidang');
    Route::get('/maklumat', [PageController::class, 'maklumat'])->name('maklumat');
    Route::get('/inovasi', [PageController::class, 'inovasi'])->name('inovasi');
    Route::get('/balai-benih', [PageController::class, 'balaiBenih'])->name('balaibenih');
    Route::get('/rekomendasi-bbm', [PageController::class, 'rekomendasiBbm'])->name('rekomendasibbm');
    Route::get('/pengaduan', [PageController::class, 'pengaduan'])->name('pengaduan');
});

// SAKIP Routes
Route::prefix('sakip')->name('sakip.')->group(function () {
    Route::get('/', [PageController::class, 'sakip'])->name('index');
    Route::get('/rka', [PageController::class, 'rka'])->name('rka');
    Route::get('/dpa', [PageController::class, 'dpa'])->name('dpa');
    Route::get('/renstra', [PageController::class, 'renstra'])->name('renstra');
    Route::get('/renja', [PageController::class, 'renja'])->name('renja');
    Route::get('/iku-iki', [PageController::class, 'ikuIki'])->name('ikuiki');
    Route::get('/perjanjian-kinerja', [PageController::class, 'perjanjianKinerja'])->name('perjanjiankinerja');
    Route::get('/renaksi', [PageController::class, 'renaksi'])->name('renaksi');
    Route::get('/lkjip', [PageController::class, 'lkjip'])->name('lkjip');
    Route::get('/lra', [PageController::class, 'lra'])->name('lra');
});

// Informasi Routes
Route::prefix('informasi')->name('informasi.')->group(function () {
    Route::get('/permohonan', [PageController::class, 'informasiSub'])->name('permohonan');
    Route::get('/daftar-publik', [PageController::class, 'daftarInformasi'])->name('daftar-publik');
    Route::get('/lowongan', [PageController::class, 'lowongan'])->name('lowongan');
});

Route::redirect('/ppid', 'https://ppid.pamekasankab.go.id/')->name('ppid');
Route::get('/kontak', [PageController::class, 'kontak'])->name('kontak');

/*
|--------------------------------------------------------------------------
| Admin Routes (Hanya Admin)
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| Admin Routes (Hanya Admin)
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'admin'])->name('dashboard');

// Profile Routes (Standard)
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Content Management
Route::middleware(['auth', 'verified', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    
    // Content Management (CRUD)
    
    // Berita CRUD
    Route::get('/berita', [BeritaController::class, 'adminIndex'])->name('berita.index');
    Route::get('/berita/create', [BeritaController::class, 'create'])->name('berita.create');
    Route::post('/berita', [BeritaController::class, 'store'])->name('berita.store');
    Route::get('/berita/{id}/edit', [BeritaController::class, 'edit'])->name('berita.edit');
    Route::put('/berita/{id}', [BeritaController::class, 'update'])->name('berita.update');
    Route::delete('/berita/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy');

    // Galeri CRUD
    Route::resource('galeri', GaleriController::class)->except(['show']);
    
    // Dokumen CRUD
    Route::resource('dokumen', DokumenController::class)->except(['show']);
    
    // Agenda CRUD
    Route::resource('agenda', AgendaController::class)->except(['show']);

});

require __DIR__.'/auth.php';
