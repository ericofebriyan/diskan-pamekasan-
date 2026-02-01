<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function kepalaDinas()
    {
        return view('profil.kepala-dinas');
    }

    public function gambaranUmum()
    {
        return view('profil.gambaran-umum');
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
        $latestNews = \App\Models\Berita::latest()->take(3)->get();
        return view('pages.layanan.maklumat', compact('latestNews'));
    }

    public function inovasi()
    {
        $latestNews = \App\Models\Berita::latest()->take(3)->get();
        return view('pages.layanan.inovasi', compact('latestNews'));
    }

    public function balaiBenih()
    {
        $latestNews = \App\Models\Berita::latest()->take(3)->get();
        return view('pages.layanan.balai-benih', compact('latestNews'));
    }

    public function rekomendasiBbm()
    {
        $latestNews = \App\Models\Berita::latest()->take(3)->get();
        return view('pages.layanan.rekomendasi-bbm', compact('latestNews'));
    }

    public function pengaduan()
    {
        $latestNews = \App\Models\Berita::latest()->take(3)->get();
        return view('pages.layanan.pengaduan', compact('latestNews'));
    }

    public function sakip()
    {
        return view('pages.sakip');
    }

    public function rka()
    {
        $documents = \App\Models\Dokumen::where('kategori', 'rka')->latest()->get();
        return view('pages.sakip.rka', compact('documents'));
    }

    public function dpa()
    {
        $documents = \App\Models\Dokumen::where('kategori', 'dpa')->latest()->get();
        return view('pages.sakip.dpa', compact('documents'));
    }

    public function renstra()
    {
        $documents = \App\Models\Dokumen::where('kategori', 'renstra')->latest()->get();
        return view('pages.sakip.renstra', compact('documents'));
    }

    public function renja()
    {
        $documents = \App\Models\Dokumen::where('kategori', 'renja')->latest()->get();
        return view('pages.sakip.renja', compact('documents'));
    }

    public function ikuIki()
    {
        $documents = \App\Models\Dokumen::where('kategori', 'iku-iki')->latest()->get();
        return view('pages.sakip.iku-iki', compact('documents'));
    }

    public function perjanjianKinerja()
    {
        $documents = \App\Models\Dokumen::where('kategori', 'perjanjian-kinerja')->latest()->get();
        return view('pages.sakip.perjanjian-kinerja', compact('documents'));
    }

    public function renaksi()
    {
        $documents = \App\Models\Dokumen::where('kategori', 'renaksi')->latest()->get();
        return view('pages.sakip.renaksi', compact('documents'));
    }

    public function lkjip()
    {
        $documents = \App\Models\Dokumen::where('kategori', 'lkjip')->latest()->get();
        return view('pages.sakip.lkjip', compact('documents'));
    }

    public function lra()
    {
        $documents = \App\Models\Dokumen::where('kategori', 'lra')->latest()->get();
        return view('pages.sakip.lra', compact('documents'));
    }

    public function sakipSub()
    {
        // Placeholder for SAKIP subpages
        return view('pages.sakip');
    }

    public function lowongan()
    {
        return view('pages.informasi.lowongan');
    }

    public function daftarInformasi()
    {
        return view('pages.informasi.daftar-informasi');
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

    public function bidangDetail($slug)
    {
        $bidang = [
            'perikanan-tangkap' => [
                'title' => 'Bidang Perikanan Tangkap',
                'functions' => [
                    'Perumusan kebijakan teknis dan penyusunan program kerja perikanan tangkap',
                    'Perumusan kebijakan pemanfaatan sumber daya perikanan tangkap',
                    'Perumusan kebijakan penyediaan sarana dan prasarana, produksi, teknologi, pemberdayaan dan perlindungan nelayan',
                    'Pengoordinasian pelaksanaan pengelolaan kawasan minapolitan',
                    'Pengelolaan dan penyelenggaraan tempat pelelangan ikan',
                    'Pelaksanaan fasilitasi kebijakan sarana dan prasarana, produksi, teknologi, pemberdayaan dan perlindungan nelayan',
                    'Pelaksanaan sosialisasi kebijakan dan peraturan perundang-undangan Bidang Perikanan Tangkap',
                    'Pelaksanaan pemberdayaan dan perlindungan secara menyeluruh, transparan dan akuntabel',
                    'Pelaksanaan koordinasi dan konsultasi kepada instansi terkait',
                    'Pelaksanaan monitoring, evaluasi dan pelaporan',
                    'Pelaksanaan tugas lain yang diberikan oleh Kepala Dinas sesuai dengan bidang tugas dan fungsinya'
                ],
                'icon' => 'M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10',
                'color' => 'emerald',
                'image' => 'images/layanan/perikanan-tangkap.jpg'
            ],
            'perikanan-budidaya' => [
                'title' => 'Bidang Perikanan Budidaya',
                'functions' => [
                    'Perumusan kebijakan teknis dan penyusunan program kerja perikanan budidaya',
                    'Perumusan kebijakan pengembangan dan fasilitasi perikanan budidaya',
                    'Perumusan kebijakan pengembangan dan fasilitasi sarana dan prasarana perikanan budidaya',
                    'Perumusan kebijakan pengelolaan kesehatan ikan dan lingkungan budidaya',
                    'Perumusan kebijakan pengendalian jaminan mutu dan keamanan pangan perikanan budidaya',
                    'Perumusan kebijakan fasilitasi pemberdayaan kelompok pembudidaya ikan',
                    'Perumusan kebijakan pengembangan teknologi perikanan budidaya',
                    'Pengoordinasian kebijakan pengembangan perikanan budidaya',
                    'Pengoordinasian pelaksanaan pengelolaan kawasan agropolitan',
                    'Pelaksanaan monitoring, evaluasi dan pelaporan',
                    'Pelaksanaan fungsi lain yang diberikan oleh Kepala Dinas sesuai dengan bidang tugas dan fungsinya'
                ],
                'icon' => 'M3 21v-8a2 2 0 012-2h14a2 2 0 012 2v8M3 21h18M3 21l8-8-8-8M21 21l-8-8 8-8',
                'color' => 'emerald',
                'image' => 'images/layanan/perikanan-budidaya.jpg'
            ],
            'pelayanan-pengawasan' => [
                'title' => 'Bidang Pelayanan dan Pengawasan Perikanan',
                'functions' => [
                    'Perumusan kebijakan teknis dan penyusunan program kerja pelayanan dan pengawasan perikanan',
                    'Perumusan penyusunan prosedur dan tata cara perizinan usaha perikanan',
                    'Pengoordinasian penyelenggaraan pelayanan dan pengawasan perikanan',
                    'Pengoordinasian pelaksanaan inventarisasi, identifikasi pelayanan teknis dan pengawasan perikanan',
                    'Pemberian rekomendasi perizinan usaha perikanan',
                    'Pelaksanaan pengawasan tertib pelaksanaan ketentuan perundang-undangan di bidang perikanan',
                    'Pelaksanaan monitoring, evaluasi, dan pelaporan pelaksanaan pelayanan dan pengawasan',
                    'Pelaksanaan fungsi lain yang diberikan oleh Kepala Dinas sesuai dengan bidang tugas dan fungsinya'
                ],
                'icon' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z',
                'color' => 'emerald',
                'image' => 'images/layanan/pelayanan-pengawasan.jpg'
            ],
            'pengolahan-dayasaing' => [
                'title' => 'Bidang Pengolahan dan Penguatan Daya Saing',
                'functions' => [
                    'Perumusan kebijakan teknis dan penyusunan program kerja pengolahan dan penguatan daya saing',
                    'Perumusan kebijakan pengembangan teknologi pengolahan dan pemasaran produk perikanan',
                    'Perumusan kebijakan jaminan mutu dan keamanan produk hasil perikanan',
                    'Perumusan kebijakan investasi dan permodalan usaha pengolahan dan pemasaran hasil perikanan',
                    'Perumusan kebijakan pengembangan usaha pengolahan dan pemasaran produk perikanan',
                    'Perumusan kebijakan fasilitasi pemberdayaan kelompok pengolahan dan pemasaran',
                    'Pengoordinasian kebijakan pengolahan dan pemasaran produk perikanan',
                    'Pelaksanaan monitoring, evaluasi, dan pelaporan',
                    'Pelaksanaan fungsi lain yang diberikan oleh Kepala Dinas sesuai dengan bidang tugas dan fungsinya'
                ],
                'icon' => 'M13 10V3L4 14h7v7l9-11h-7z',
                'color' => 'emerald',
                'image' => 'images/layanan/pengolahan-dayasaing.jpg'
            ],
            // More fields can be added here
        ];

        if (!isset($bidang[$slug])) {
            abort(404);
        }

        $data = $bidang[$slug];
        return view('pages.layanan.bidang', compact('data'));
    }

    public function kontak()
    {
        return view('pages.kontak');
    }
}
