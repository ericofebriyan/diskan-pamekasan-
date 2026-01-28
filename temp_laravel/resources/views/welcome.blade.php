@extends('layouts.app')

@section('title', 'Beranda - Dinas Perikanan Kabupaten Pamekasan')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-emerald-800 text-white overflow-hidden">
        <!-- Background Pattern (Optional) -->
        <div class="absolute inset-0 opacity-10">
            <svg class="h-full w-full" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
                <path d="M0 100 C 20 0 50 0 100 100 Z"></path>
            </svg>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 md:py-32 relative z-10 flex flex-col items-center text-center">
            <span class="text-emerald-300 font-bold tracking-widest uppercase mb-4 text-sm md:text-base"></span>
            <h1 class="text-4xl md:text-6xl font-extrabold uppercase tracking-tight leading-tight mb-6">
                Dinas Perikanan<br>
                <span class="text-blue-200">Kabupaten Pamekasan</span>
            </h1>
            <p class="max-w-2xl mx-auto text-lg md:text-xl text-emerald-100 mb-10 leading-relaxed">
                Mewujudkan sektor perikanan yang mandiri, berdaya saing, dan berkelanjutan untuk kesejahteraan masyarakat.
            </p>
            <div class="flex gap-4">
                <a href="#layanan" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-md font-semibold transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                    Layanan Kami
                </a>
                <a href="#berita" class="bg-transparent border-2 border-emerald-400 text-emerald-100 hover:bg-emerald-700 hover:border-emerald-700 px-8 py-3 rounded-md font-semibold transition-all">
                    Berita Terkini
                </a>
            </div>
        </div>
        
        <!-- Wave Separator -->
        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
            <svg class="relative block w-[calc(100%+1.3px)] h-[60px] md:h-[100px]" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="fill-slate-50"></path>
            </svg>
        </div>
    </section>

    <!-- Services Section (Bidang Pelayanan) -->
    <section id="layanan" class="py-20 bg-slate-50 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-emerald-700 font-bold text-sm tracking-wider uppercase mb-2">Bidang Pelayanan</h2>
                <h3 class="text-3xl md:text-4xl font-bold text-slate-900">Fokus Layanan Utama</h3>
                <div class="w-24 h-1 bg-blue-600 mx-auto mt-4 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Service 1: Perikanan Tangkap -->
                <a href="{{ route('layanan.index') }}" class="block">
                    <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 border-b-4 border-emerald-500 group cursor-pointer hover:-translate-y-2 h-full">
                        <div class="w-16 h-16 bg-emerald-100 text-emerald-600 rounded-lg flex items-center justify-center mb-6 group-hover:bg-emerald-600 group-hover:text-white transition-colors">
                            <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" /></svg>
                        </div>
                        <h4 class="text-xl font-bold text-slate-800 mb-3 group-hover:text-emerald-700">Perikanan Tangkap</h4>
                        <p class="text-slate-600 text-sm leading-relaxed">Pengelolaan dan pengembangan sumber daya ikan di perairan laut dan umum daratan.</p>
                    </div>
                </a>

                <!-- Service 2: Perikanan Budidaya -->
                <a href="{{ route('layanan.index') }}" class="block">
                    <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 border-b-4 border-blue-500 group cursor-pointer hover:-translate-y-2 h-full">
                        <div class="w-16 h-16 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center mb-6 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                            <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-8a2 2 0 012-2h14a2 2 0 012 2v8M3 21h18M3 21l8-8-8-8M21 21l-8-8 8-8" /></svg>
                        </div>
                        <h4 class="text-xl font-bold text-slate-800 mb-3 group-hover:text-blue-700">Perikanan Budidaya</h4>
                        <p class="text-slate-600 text-sm leading-relaxed">Pengembangan budidaya ikan air tawar, payau, dan laut yang berkelanjutan.</p>
                    </div>
                </a>

                <!-- Service 3: Pelayanan & Pengawasan -->
                <a href="{{ route('layanan.index') }}" class="block">
                    <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 border-b-4 border-orange-500 group cursor-pointer hover:-translate-y-2 h-full">
                        <div class="w-16 h-16 bg-orange-100 text-orange-600 rounded-lg flex items-center justify-center mb-6 group-hover:bg-orange-600 group-hover:text-white transition-colors">
                            <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        </div>
                        <h4 class="text-xl font-bold text-slate-800 mb-3 group-hover:text-orange-700">Pelayanan & Pengawasan</h4>
                        <p class="text-slate-600 text-sm leading-relaxed">Pelayanan perizinan usaha dan pengawasan sumber daya kelautan dan perikanan.</p>
                    </div>
                </a>

                <!-- Service 4: Pengolahan & Daya Saing -->
                <a href="{{ route('layanan.index') }}" class="block">
                    <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 border-b-4 border-purple-500 group cursor-pointer hover:-translate-y-2 h-full">
                        <div class="w-16 h-16 bg-purple-100 text-purple-600 rounded-lg flex items-center justify-center mb-6 group-hover:bg-purple-600 group-hover:text-white transition-colors">
                            <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                        </div>
                        <h4 class="text-xl font-bold text-slate-800 mb-3 group-hover:text-purple-700">Pengolahan & Daya Saing</h4>
                        <p class="text-slate-600 text-sm leading-relaxed">Peningkatan nilai tambah dan daya saing produk hasil perikanan.</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- News Section (Berita Terkini) -->
    <section id="berita" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <h2 class="text-blue-900 font-bold text-sm tracking-wider uppercase mb-2">Informasi Publik</h2>
                    <h3 class="text-3xl md:text-4xl font-bold text-slate-900">Berita Terkini</h3>
                    <div class="w-20 h-1 bg-emerald-500 mt-4 rounded-full"></div>
                </div>
                <a href="{{ route('berita.index') }}" class="hidden md:inline-flex items-center text-emerald-600 font-semibold hover:text-emerald-800 transition-colors">
                    Lihat Semua Berita
                    <svg class="ml-2 w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($berita as $item)
                    <article class="bg-white rounded-xl shadow-sm border border-slate-100 overflow-hidden hover:shadow-xl transition-all duration-300 group flex flex-col h-full">
                        <div class="relative h-56 overflow-hidden">
                            @if($item->gambar)
                                <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            @else
                                <div class="w-full h-full bg-slate-200 flex items-center justify-center text-slate-400">
                                    <svg class="w-12 h-12" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                                </div>
                            @endif
                            <div class="absolute top-4 left-4 bg-blue-600 text-white text-xs font-bold px-3 py-1 rounded shadow">
                                {{ $item->created_at->format('d M Y') }}
                            </div>
                        </div>
                        <div class="p-6 flex flex-col flex-grow">
                             <div class="text-xs font-semibold text-emerald-600 mb-2 uppercase tracking-wide">
                                {{ $item->kategori ?? 'Berita' }}
                            </div>
                            <h4 class="text-xl font-bold text-slate-900 mb-3 line-clamp-2 leading-tight group-hover:text-blue-700 transition-colors">
                                <a href="{{ route('berita.show', $item->id) }}">
                                    {{ $item->judul }}
                                </a>
                            </h4>
                            <p class="text-slate-600 text-sm line-clamp-3 mb-4 flex-grow">
                                {{ Str::limit(strip_tags($item->konten), 100) }}
                            </p>
                            <a href="{{ route('berita.show', $item->id) }}" class="inline-flex items-center text-sm font-bold text-blue-600 hover:text-blue-800 mt-auto">
                                Baca Selengkapnya
                                <svg class="ml-1 w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>

            <div class="mt-12 text-center md:hidden">
                <a href="{{ route('berita.index') }}" class="inline-block bg-emerald-600 text-white px-6 py-3 rounded-md font-semibold hover:bg-emerald-700 transition-colors">
                    Lihat Semua Berita
                </a>
            </div>
        </div>
    </section>
@endsection
