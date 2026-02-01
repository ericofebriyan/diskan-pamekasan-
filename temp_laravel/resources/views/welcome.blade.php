@extends('layouts.app')

@section('title', 'Beranda - Dinas Perikanan Kabupaten Pamekasan')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-emerald-800 text-white overflow-hidden" x-data="{ show: false }" x-init="setTimeout(() => show = true, 300)">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <svg class="h-full w-full" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
                <path d="M0 100 C 20 0 50 0 100 100 Z"></path>
            </svg>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 md:py-32 relative z-10 flex flex-col items-center text-center transition-all duration-1000 transform"
             :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">
            
            <span class="text-emerald-300 font-bold tracking-widest uppercase mb-4 text-sm md:text-base animate-pulse">Selamat Datang Di Website Resmi</span>
            <h1 class="text-4xl md:text-6xl font-extrabold uppercase tracking-tight leading-tight mb-6 drop-shadow-md">
                Dinas Perikanan<br>
                <span class="text-blue-200">Kabupaten Pamekasan</span>
            </h1>
            <p class="max-w-2xl mx-auto text-lg md:text-xl text-emerald-100 mb-10 leading-relaxed drop-shadow">
                Mewujudkan sektor perikanan yang mandiri, berdaya saing, dan berkelanjutan untuk kesejahteraan masyarakat.
            </p>
            <div class="flex gap-4">
                <a href="#layanan" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-full font-semibold transition-all shadow-lg hover:shadow-blue-500/50 transform hover:-translate-y-1 hover:scale-105 active:scale-95 duration-300">
                    Layanan Kami
                </a>
                <a href="#berita" class="bg-transparent border-2 border-emerald-400 text-emerald-100 hover:bg-emerald-700 hover:border-emerald-700 px-8 py-3 rounded-full font-semibold transition-all hover:shadow-emerald-500/30 hover:-translate-y-1 duration-300">
                    Berita Terkini
                </a>
            </div>
        </div>
        
        <!-- Wave Separator -->
        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
            <svg class="relative block w-[calc(100%+1.3px)] h-[60px] md:h-[100px]" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="fill-gray-50"></path>
            </svg>
        </div>
    </section>

    <!-- Services Section (Bidang Pelayanan) -->
    <section id="layanan" class="py-20 bg-gray-50 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 scroll-animate opacity-0 translate-y-8 transition-all duration-1000 ease-out">
                <h2 class="text-emerald-700 font-bold text-sm tracking-wider uppercase mb-2">Bidang Pelayanan</h2>
                <h3 class="text-3xl md:text-4xl font-bold text-slate-900">Fokus Layanan Utama</h3>
                <div class="w-24 h-1 bg-blue-600 mx-auto mt-4 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Service Cards with Staggered Animation -->
                @php
                    $services = [
                        ['title' => 'Perikanan Tangkap', 'desc' => 'Pengelolaan dan pengembangan sumber daya ikan di perairan laut dan umum daratan.', 'color' => 'emerald', 'icon' => 'M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10'],
                        ['title' => 'Perikanan Budidaya', 'desc' => 'Pengembangan budidaya ikan air tawar, payau, dan laut yang berkelanjutan.', 'color' => 'blue', 'icon' => 'M3 21v-8a2 2 0 012-2h14a2 2 0 012 2v8M3 21h18M3 21l8-8-8-8M21 21l-8-8 8-8'],
                        ['title' => 'Pelayanan & Pengawasan', 'desc' => 'Pelayanan perizinan usaha dan pengawasan sumber daya kelautan dan perikanan.', 'color' => 'orange', 'icon' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z'],
                        ['title' => 'Pengolahan & Daya Saing', 'desc' => 'Peningkatan nilai tambah dan daya saing produk hasil perikanan.', 'color' => 'purple', 'icon' => 'M13 10V3L4 14h7v7l9-11h-7z'],
                    ];
                @endphp

                @foreach($services as $index => $service)
                    @php
                        $href = url('/#layanan');
                        if ($index === 0) $href = route('layanan.bidang', 'perikanan-tangkap');
                        if ($index === 1) $href = route('layanan.bidang', 'perikanan-budidaya');
                        if ($index === 2) $href = route('layanan.bidang', 'pelayanan-pengawasan');
                        if ($index === 3) $href = route('layanan.bidang', 'pengolahan-dayasaing');
                    @endphp
                    <a href="{{ $href }}" class="block scroll-animate opacity-0 translate-y-8 transition-all duration-700 ease-out delay-[{{ ($index + 1) * 200 }}ms]">
                        <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-2xl transition-all duration-300 border-b-4 border-{{ $service['color'] }}-500 group cursor-pointer hover:-translate-y-3 h-full relative overflow-hidden">
                            <div class="absolute top-0 right-0 -mr-8 -mt-8 w-32 h-32 bg-{{ $service['color'] }}-50 rounded-full opacity-50 transition-transform group-hover:scale-150 duration-500"></div>
                            
                            <div class="w-16 h-16 bg-{{ $service['color'] }}-100 text-{{ $service['color'] }}-600 rounded-xl flex items-center justify-center mb-6 group-hover:bg-{{ $service['color'] }}-600 group-hover:text-white transition-all duration-300 shadow-md relative z-10">
                                <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $service['icon'] }}" /></svg>
                            </div>
                            <h4 class="text-xl font-bold text-slate-800 mb-3 group-hover:text-{{ $service['color'] }}-700 relative z-10">{{ $service['title'] }}</h4>
                            <p class="text-slate-600 text-sm leading-relaxed relative z-10">{{ $service['desc'] }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- News Section (Berita Terkini) -->
    <section id="berita" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-end mb-12 scroll-animate opacity-0 translate-y-8 transition-all duration-1000">
                <div>
                    <h2 class="text-blue-900 font-bold text-sm tracking-wider uppercase mb-2">Informasi Publik</h2>
                    <h3 class="text-3xl md:text-4xl font-bold text-slate-900">Berita Terkini</h3>
                    <div class="w-20 h-1 bg-emerald-500 mt-4 rounded-full"></div>
                </div>
                <a href="{{ route('berita.index') }}" class="hidden md:inline-flex items-center text-emerald-600 font-semibold hover:text-emerald-800 transition-all hover:translate-x-2">
                    Lihat Semua Berita
                    <svg class="ml-2 w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($berita as $index => $item)
                    <article class="scroll-animate opacity-0 translate-y-8 transition-all duration-700 ease-out delay-[{{ ($index * 150) }}ms] bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden hover:shadow-2xl transition-all duration-300 group flex flex-col h-full hover:-translate-y-2">
                        <div class="relative h-56 overflow-hidden">
                            @if($item->gambar)
                                <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            @else
                                <div class="w-full h-full bg-slate-200 flex items-center justify-center text-slate-400">
                                    <svg class="w-12 h-12" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                                </div>
                            @endif
                            <div class="absolute top-4 left-4 bg-gradient-to-r from-blue-600 to-blue-500 text-white text-xs font-bold px-4 py-1.5 rounded-full shadow-lg">
                                {{ $item->created_at->format('d M Y') }}
                            </div>
                        </div>
                        <div class="p-6 flex flex-col flex-grow relative">
                             <div class="text-xs font-bold text-emerald-600 mb-2 uppercase tracking-wide bg-emerald-50 inline-block px-2 py-1 rounded w-fit">
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
                            <a href="{{ route('berita.show', $item->id) }}" class="inline-flex items-center text-sm font-bold text-blue-600 hover:text-blue-800 mt-auto group-hover:translate-x-2 transition-transform duration-300">
                                Baca Selengkapnya
                                <svg class="ml-1 w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>

            <div class="mt-12 text-center md:hidden">
                <a href="{{ route('berita.index') }}" class="inline-block bg-emerald-600 text-white px-8 py-3 rounded-full font-bold hover:bg-emerald-700 transition-all hover:shadow-lg">
                    Lihat Semua Berita
                </a>
            </div>
        </div>
    </section>

    <!-- Scroll Animation Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.remove('opacity-0', 'translate-y-8');
                        entry.target.classList.add('opacity-100', 'translate-y-0');
                        observer.unobserve(entry.target); // Only animate once
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.scroll-animate').forEach(el => {
                observer.observe(el);
            });
        });
    </script>
@endsection
