<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\AgendaController;

use App\Models\Berita;

Route::get('/', function () {
    $berita = Berita::latest()->limit(6)->get();
    return view('welcome', compact('berita'));
})->name('home');

Route::resource('berita', BeritaController::class);
Route::resource('galeri', GaleriController::class);
Route::resource('dokumen', DokumenController::class);
Route::resource('agenda', AgendaController::class);

use App\Http\Controllers\PageController;

// Profil Routes
Route::prefix('profil')->name('profil.')->group(function () {
    Route::get('/kepala-dinas', [PageController::class, 'kepalaDinas'])->name('kepaladinas');
    Route::get('/sejarah', [PageController::class, 'sejarah'])->name('sejarah');
    Route::get('/visi-misi', [PageController::class, 'visiMisi'])->name('visimisi');
    Route::get('/struktur-organisasi', [PageController::class, 'strukturOrganisasi'])->name('struktur');
    Route::get('/tupoksi', [PageController::class, 'tupoksi'])->name('tupoksi');
});

// Other Static Pages
// Layanan Routes
Route::prefix('layanan')->name('layanan.')->group(function () {
    Route::get('/', [PageController::class, 'layanan'])->name('index'); // Index for "Semua Layanan"
    Route::get('/maklumat', [PageController::class, 'maklumat'])->name('maklumat');
    Route::get('/inovasi', [PageController::class, 'inovasi'])->name('inovasi');
    Route::get('/balai-benih', [PageController::class, 'balaiBenih'])->name('balaibenih');
    Route::get('/rekomendasi-bbm', [PageController::class, 'rekomendasiBbm'])->name('rekomendasibbm');
    Route::get('/pengaduan', [PageController::class, 'pengaduan'])->name('pengaduan');
});
// SAKIP Routes
Route::prefix('sakip')->name('sakip.')->group(function () {
    Route::get('/', [PageController::class, 'sakip'])->name('index'); // Index SAKIP
    Route::get('/rka', [PageController::class, 'sakipSub'])->name('rka');
    Route::get('/dpa', [PageController::class, 'sakipSub'])->name('dpa');
    Route::get('/renstra', [PageController::class, 'sakipSub'])->name('renstra');
    Route::get('/renja', [PageController::class, 'sakipSub'])->name('renja');
    Route::get('/iku-iki', [PageController::class, 'sakipSub'])->name('ikuiki');
    Route::get('/perjanjian-kinerja', [PageController::class, 'sakipSub'])->name('perjanjiankinerja');
    Route::get('/renaksi', [PageController::class, 'sakipSub'])->name('renaksi');
    Route::get('/lkjip', [PageController::class, 'sakipSub'])->name('lkjip');
    Route::get('/lra', [PageController::class, 'sakipSub'])->name('lra');
});

// Informasi Routes (PPID moved here as a link, but handled in controller or redirect)
Route::prefix('informasi')->name('informasi.')->group(function () {
    Route::get('/permohonan', [PageController::class, 'informasiSub'])->name('permohonan');
    Route::get('/daftar-publik', [PageController::class, 'informasiSub'])->name('daftar-publik');
    Route::get('/lowongan', [PageController::class, 'informasiSub'])->name('lowongan');
});

Route::get('/ppid', [PageController::class, 'ppid'])->name('ppid'); // Main PPID page/link
Route::get('/kontak', [PageController::class, 'kontak'])->name('kontak');
