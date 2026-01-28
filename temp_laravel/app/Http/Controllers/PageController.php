<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function kepalaDinas()
    {
        return view('profil.kepala-dinas');
    }

    public function sejarah()
    {
        return view('profil.sejarah');
    }

    public function visiMisi()
    {
        return view('profil.visi-misi');
    }

    public function strukturOrganisasi()
    {
        return view('profil.struktur-organisasi');
    }

    public function tupoksi()
    {
        return view('profil.tupoksi');
    }

    public function layanan()
    {
        return view('pages.layanan.index');
    }

    public function maklumat()
    {
        return view('pages.layanan.maklumat');
    }

    public function inovasi()
    {
        return view('pages.layanan.inovasi');
    }

    public function balaiBenih()
    {
        return view('pages.layanan.balai-benih');
    }

    public function rekomendasiBbm()
    {
        return view('pages.layanan.rekomendasi-bbm');
    }

    public function pengaduan()
    {
        return view('pages.layanan.pengaduan');
    }

    public function sakip()
    {
        return view('pages.sakip');
    }

    public function sakipSub()
    {
        // Placeholder for SAKIP subpages
        return view('pages.sakip');
    }

    public function informasiSub()
    {
        // Placeholder for Informasi subpages (can be separate views later)
        return view('pages.layanan.index'); // Temporary fallback or create a dedicated view
    }

    public function ppid()
    {
        return view('pages.ppid');
    }

    public function kontak()
    {
        return view('pages.kontak');
    }
}
