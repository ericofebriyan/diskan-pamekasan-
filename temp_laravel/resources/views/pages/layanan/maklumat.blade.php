@extends('layouts.app')

@section('title', 'Maklumat Pelayanan - Dinas Perikanan Kabupaten Pamekasan')

@section('content')
    <!-- Hero Section -->
    <div class="pt-24 pb-12 bg-emerald-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
            <h1 class="text-4xl font-bold mb-4 uppercase tracking-tight">Maklumat Pelayanan</h1>
            <p class="text-emerald-100 text-lg uppercase tracking-widest font-medium">Dinas Perikanan Kabupaten Pamekasan</p>
        </div>
    </div>

    <!-- Main Content Container -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="flex flex-col lg:flex-row gap-12">
            
            <!-- Left Column: Main Maklumat Content -->
            <div class="lg:w-2/3">
                <div class="bg-white rounded-3xl shadow-xl overflow-hidden border border-slate-100 relative group">
                    <!-- Photo Header -->
                    <div class="relative h-[350px] md:h-[450px] overflow-hidden">
                        <img src="{{ asset('images/layanan/maklumat.jpg') }}" alt="Maklumat Pelayanan" 
                             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/40 to-transparent"></div>
                    </div>

                    <!-- Content Body -->
                    <div class="p-8 md:p-12 text-center relative">
                        <div class="absolute -top-10 left-1/2 -translate-x-1/2 w-20 h-20 bg-white rounded-2xl shadow-lg border border-emerald-50 flex items-center justify-center text-emerald-600">
                            <svg class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>

                        <h2 class="text-3xl font-bold text-slate-800 mb-10 tracking-tight mt-10">MAKLUMAT PELAYANAN</h2>
                        
                        <div class="max-w-3xl mx-auto space-y-8">
                            <div class="relative">
                                <span class="absolute -top-6 -left-4 text-7xl text-emerald-100 font-serif leading-none italic select-none">"</span>
                                <p class="text-xl md:text-2xl text-slate-700 leading-relaxed font-bold tracking-wide uppercase">
                                    DENGAN INI, KAMI MENYATAKAN SANGGUP MENYELENGGARAKAN PELAYANAN SESUAI STANDAR PELAYANAN YANG TELAH DITETAPKAN SESUAI DENGAN KEWAJIBAN DAN MELAKUKAN PERBAIKAN SECARA TERUS MENERUS.
                                </p>
                            </div>

                            <p class="text-xl md:text-2xl text-slate-700 leading-relaxed font-bold tracking-wide uppercase border-t border-emerald-100 pt-8">
                                APABILA TIDAK MENEPATI JANJI INI, KAMI SIAP MENERIMA SANKSI SESUAI DENGAN PERATURAN PERUNDANG-UNDANGAN YANG BERLAKU.
                            </p>
                        </div>

                        <!-- Signature Section -->
                        <div class="mt-16 inline-flex flex-col items-center">
                            <div class="w-32 h-px bg-slate-200 mb-6"></div>
                            <p class="text-lg font-bold text-slate-900 leading-tight">KEPALA DINAS PERIKANAN</p>
                            <p class="text-lg font-bold text-slate-900">KABUPATEN PAMEKASAN</p>
                            <div class="mt-8 flex gap-2">
                                <div class="w-2 h-2 rounded-full bg-emerald-500"></div>
                                <div class="w-2 h-2 rounded-full bg-emerald-400"></div>
                                <div class="w-2 h-2 rounded-full bg-emerald-300"></div>
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
                                <div class="w-20 h-20 flex-shrink-0 bg-slate-100 rounded-xl overflow-hidden">
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
                                ['name' => 'Inovasi Pelayanan', 'route' => 'layanan.inovasi'],
                                ['name' => 'Balai Benih Ikan', 'route' => 'layanan.balaibenih'],
                                ['name' => 'Rekomendasi BBM', 'route' => 'layanan.rekomendasibbm'],
                                ['name' => 'Pengaduan Online', 'route' => 'layanan.pengaduan'],
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
    </div>
@endsection