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

    public function rka()
    {
        return view('pages.sakip.rka');
    }

    public function dpa()
    {
        return view('pages.sakip.dpa');
    }

    public function renstra()
    {
        return view('pages.sakip.renstra');
    }

    public function renja()
    {
        return view('pages.sakip.renja');
    }

    public function ikuiki()
    {
        return view('pages.sakip.iku-iki');
    }

    public function perjanjianKinerja()
    {
        return view('pages.sakip.perjanjian-kinerja');
    }

    public function renaksi()
    {
        return view('pages.sakip.renaksi');
    }

    public function lkjip()
    {
        return view('pages.sakip.lkjip');
    }

    public function lra()
    {
        return view('pages.sakip.lra');
    }

    public function informasiPermohonan()
    {
        return view('pages.informasi.permohonan');
    }

    public function informasiDaftarPublik()
    {
        return view('pages.informasi.daftar-publik');
    }

    public function informasiLowongan()
    {
        return view('pages.informasi.lowongan');
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
