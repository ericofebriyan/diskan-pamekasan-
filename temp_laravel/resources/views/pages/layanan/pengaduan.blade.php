@extends('layouts.app')

@section('title', 'Pengaduan Online - Dinas Perikanan Kabupaten Pamekasan')

@section('content')
    <!-- Hero Section -->
    <div class="pt-24 pb-12 bg-emerald-700 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                <path d="M0 100 C 20 0 50 0 100 100 Z" fill="white"></path>
            </svg>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white relative z-10">
            <h1 class="text-4xl font-bold mb-4 tracking-tight uppercase">Layanan Pengaduan Online</h1>
            <p class="text-emerald-100 text-lg uppercase tracking-widest font-medium">Transparansi, Integritas, & Pelayanan Publik Terbaik</p>
        </div>
    </div>

    <!-- Main Content Container -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="flex flex-col lg:flex-row gap-12">
            
            <!-- Left Column: Content -->
            <div class="lg:w-2/3">
                <div class="bg-white rounded-3xl shadow-xl border border-slate-100 overflow-hidden">
                    <!-- Image Area -->
                    <div class="relative h-[400px]">
                        <img src="{{ asset('images/layanan/pengaduan.jpg') }}" alt="Pengaduan Online" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-emerald-900/20"></div>
                        <div class="absolute top-8 left-8">
                            <span class="bg-white/90 backdrop-blur-md text-emerald-800 px-6 py-2 rounded-2xl text-sm font-black shadow-2xl flex items-center gap-2">
                                <span class="w-2 h-2 bg-red-500 rounded-full animate-ping"></span>
                                SIAGA 24/7
                            </span>
                        </div>
                    </div>

                    <!-- Text Content -->
                    <div class="p-8 md:p-12">
                        <div class="prose prose-lg max-w-none text-slate-700 leading-relaxed">
                            <h2 class="text-2xl font-bold text-slate-900 mb-6">Selamat Datang di Portal Pengaduan Masyarakat</h2>
                            <p class="mb-10 text-slate-600">
                                Kami percaya bahwa keterlibatan aktif masyarakat adalah kunci dalam menciptakan lingkungan yang bersih, transparan, dan akuntabel. Untuk itu, kami mempersembahkan Portal Pengaduan Online, sebuah platform yang memudahkan Anda untuk menyampaikan pengaduan dan laporan mengenai berbagai masalah yang memerlukan perhatian dan tindakan.
                            </p>

                            <h3 class="text-xl font-bold text-slate-900 mb-8 border-b border-slate-100 pb-4 flex items-center gap-3">
                                <svg class="w-6 h-6 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" /></svg>
                                Saluran Pengaduan Resmi
                            </h3>

                            <div class="space-y-6 mb-12">
                                <!-- LAPOR! -->
                                <div class="bg-slate-50 rounded-2xl p-6 border border-slate-100 group hover:border-emerald-200 transition-all">
                                    <div class="flex flex-col md:flex-row gap-6 items-start">
                                        <div class="w-16 h-16 bg-white rounded-2xl shadow-sm flex-shrink-0 flex items-center justify-center p-3">
                                            <span class="text-red-600 font-black text-xl tracking-tighter italic">LAPOR!</span>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-bold text-slate-900 mb-2">1. LAPOR (Layanan Aspirasi dan Pengaduan Online Rakyat)</h4>
                                            <p class="text-sm text-slate-600 mb-4">Untuk melaporkan masalah umum atau memberikan aspirasi kepada pemerintah terkait layanan publik.</p>
                                            <a href="https://span.lapor.go.id" target="_blank" class="inline-flex items-center gap-2 text-sm font-bold text-emerald-600 hover:text-emerald-700 transition-colors">
                                                <span>Akses portal span.lapor.go.id</span>
                                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" /></svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- WBS -->
                                <div class="bg-slate-50 rounded-2xl p-6 border border-slate-100 group hover:border-emerald-200 transition-all">
                                    <div class="flex flex-col md:flex-row gap-6 items-start">
                                        <div class="w-16 h-16 bg-white rounded-2xl shadow-sm flex-shrink-0 flex items-center justify-center p-3">
                                            <svg class="w-10 h-10 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-bold text-slate-900 mb-2">2. Media Pelaporan Tindak Pidana Korupsi (Whistleblowing System)</h4>
                                            <p class="text-sm text-slate-600 mb-4">Untuk melaporkan dugaan tindak pidana korupsi dan pelanggaran lainnya yang membutuhkan tindakan dari Inspektorat Pamekasan.</p>
                                            <a href="https://bit.ly/WBSInspektoratPamekasan" target="_blank" class="inline-flex items-center gap-2 text-sm font-bold text-emerald-600 hover:text-emerald-700 transition-colors">
                                                <span>Akses Form WBS Inspektorat</span>
                                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" /></svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- GOL KPK -->
                                <div class="bg-slate-50 rounded-2xl p-6 border border-slate-100 group hover:border-emerald-200 transition-all">
                                    <div class="flex flex-col md:flex-row gap-6 items-start">
                                        <div class="w-16 h-16 bg-white rounded-2xl shadow-sm flex-shrink-0 flex items-center justify-center p-3">
                                            <span class="text-emerald-700 font-black text-xl italic uppercase">GOL</span>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-bold text-slate-900 mb-2">3. Aplikasi GOL KPK (Gratifikasi Online)</h4>
                                            <p class="text-sm text-slate-600 mb-4">Untuk melaporkan gratifikasi atau tindakan korupsi lainnya secara langsung kepada Komisi Pemberantasan Korupsi (KPK).</p>
                                            <a href="https://gol.kpk.go.id" target="_blank" class="inline-flex items-center gap-2 text-sm font-bold text-emerald-600 hover:text-emerald-700 transition-colors">
                                                <span>Akses gol.kpk.go.id</span>
                                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" /></svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-emerald-900 text-white rounded-3xl p-8 mb-10 shadow-2xl relative overflow-hidden">
                                <div class="absolute top-0 right-0 w-48 h-48 bg-emerald-500/10 rounded-full blur-3xl"></div>
                                <h3 class="text-xl font-bold mb-6 flex items-center gap-3">
                                    <svg class="w-6 h-6 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                                    Dukungan dan Kontak Langsung
                                </h3>
                                <p class="text-slate-300 mb-8 leading-relaxed">
                                    Jika Anda membutuhkan bantuan lebih lanjut atau memiliki pengaduan yang ingin disampaikan langsung kepada kami, jangan ragu untuk menghubungi tim resmi kami.
                                </p>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div class="bg-white/10 backdrop-blur-md rounded-2xl p-4 border border-white/10">
                                        <p class="text-xs font-bold text-emerald-400 uppercase tracking-widest mb-1">Email Resmi</p>
                                        <p class="text-sm font-bold">perikanan.pamekasan@gmail.com</p>
                                    </div>
                                    <div class="bg-white/10 backdrop-blur-md rounded-2xl p-4 border border-white/10">
                                        <p class="text-xs font-bold text-emerald-400 uppercase tracking-widest mb-1">Media Sosial</p>
                                        <div class="flex gap-4">
                                            <span class="text-sm font-bold">FB: @DisKanPamekasan</span>
                                            <span class="text-sm font-bold">IG: @perikanan_pamekasan</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center">
                                <p class="text-slate-500 font-medium italic italic">
                                    "Terima kasih atas partisipasi Anda dalam menjaga integritas dan kualitas layanan publik. Dengan kontribusi Anda, kita bersama-sama membangun lingkungan yang lebih baik dan lebih adil."
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Sidebar -->
            <div class="lg:w-1/3 space-y-8">
                
                <!-- Widget: Berita Terbaru -->
                <div class="bg-white rounded-3xl shadow-lg border border-slate-100 p-6">
                    <h3 class="text-lg font-bold text-slate-900 mb-6 flex items-center gap-3">
                        <span class="w-8 h-8 bg-emerald-100 text-emerald-600 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2.5 2.5 0 00-2.5-2.5H15" /></svg>
                        </span>
                        Berita Terkini
                    </h3>
                    <div class="space-y-6">
                        @forelse($latestNews as $news)
                            <a href="{{ route('berita.show', $news->slug) }}" class="group flex gap-4 items-start">
                                <div class="w-20 h-20 flex-shrink-0 bg-slate-100 rounded-xl overflow-hidden shadow-inner uppercase">
                                    @if($news->gambar)
                                        <img src="{{ asset('storage/' . $news->gambar) }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="{{ $news->judul }}">
                                    @else
                                        <div class="w-full h-full flex items-center justify-center text-slate-400">
                                             <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                                        </div>
                                    @endif
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-sm font-bold text-slate-800 line-clamp-2 leading-snug group-hover:text-emerald-600 transition-colors">{{ $news->judul }}</h4>
                                    <span class="text-xs text-slate-400 mt-1 block">{{ $news->created_at->format('d M Y') }}</span>
                                </div>
                            </a>
                        @empty
                            <p class="text-sm text-slate-500 italic">Belum ada berita terbaru.</p>
                        @endforelse
                    </div>
                </div>

                <!-- Widget: Layanan Lainnya -->
                <div class="bg-slate-900 rounded-3xl shadow-lg p-6 text-white overflow-hidden relative">
                    <div class="absolute -top-10 -right-10 w-32 h-32 bg-emerald-500/20 rounded-full blur-2xl"></div>
                    <h3 class="text-lg font-bold mb-6 flex items-center gap-3 relative z-10">
                        <span class="w-8 h-8 bg-white/10 text-emerald-400 rounded-lg flex items-center justify-center backdrop-blur-md">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" /></svg>
                        </span>
                        Layanan Lainnya
                    </h3>
                    <div class="space-y-2 relative z-10">
                        @php
                            $services = [
                                ['name' => 'Maklumat Pelayanan', 'route' => 'layanan.maklumat'],
                                ['name' => 'Inovasi Pelayanan', 'route' => 'layanan.inovasi'],
                                ['name' => 'Balai Benih Ikan', 'route' => 'layanan.balaibenih'],
                                ['name' => 'Rekomendasi BBM', 'route' => 'layanan.rekomendasibbm'],
                            ];
                        @endphp
                        @foreach($services as $s)
                            <a href="{{ route($s['route']) }}" class="flex items-center justify-between p-3 rounded-xl hover:bg-white/10 transition-all group">
                                <span class="text-sm font-medium text-slate-300 group-hover:text-white">{{ $s['name'] }}</span>
                                <svg class="w-4 h-4 text-emerald-500 opacity-0 group-hover:opacity-100 -translate-x-2 group-hover:translate-x-0 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection