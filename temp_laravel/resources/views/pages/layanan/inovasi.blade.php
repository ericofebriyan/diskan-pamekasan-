@extends('layouts.app')

@section('title', 'Inovasi Pelayanan - Dinas Perikanan Kabupaten Pamekasan')

@section('content')
    <!-- Hero Section -->
    <div class="pt-24 pb-12 bg-emerald-700 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                <path d="M0 100 C 20 0 50 0 100 100 Z" fill="white"></path>
            </svg>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white relative z-10">
            <h1 class="text-4xl font-bold mb-4 uppercase tracking-tight">Inovasi Pelayanan</h1>
            <p class="text-emerald-100 text-lg uppercase tracking-widest font-medium">Terobosan Baru Untuk Efisiensi & Kemudahan</p>
        </div>
    </div>

    <!-- Main Content Container -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="flex flex-col lg:flex-row gap-12">
            
            <!-- Left Column: Innovations List -->
            <div class="lg:w-2/3 space-y-12">
                @php
                    $bidangs = [
                        [
                            'title' => 'Bidang Perikanan Tangkap',
                            'color' => 'blue',
                            'items' => [
                                ['name' => 'JALA SEHAT (Jalin Usaha dengan Sertifikat Hak Atas Tanah)', 'link' => 'https://drive.google.com/file/d/12Y77SPzS01s_-qgt8iNPjbEvFIy2dtwG/view'],
                                ['name' => 'SI IKAN MAKAREL (Aksi Keluarga Nelayan Maju, Kreatif, Berdikari, dan Unggul)', 'link' => 'https://drive.google.com/file/d/117ScuUHpOP1fF2Y3c5_UuS32nAMAmnKm/view'],
                            ]
                        ],
                        [
                            'title' => 'Bidang Perikanan Budidaya',
                            'color' => 'emerald',
                            'items' => [
                                ['name' => 'PENA DAN AKAL (Pemulihan Ekonomi Masyarakat Petambak dengan pengembangan Komuditas Unggulan Budidaya Air Laut)', 'link' => 'https://drive.google.com/file/d/18Vvf4KPuwl5CVNG4qxPKX4LXZQOhI4pr/view'],
                                ['name' => 'PIKAT PATIN (Produksi Ikan Meningkat Melalui Pemantauan Kualitas Air dan Pendampingan)', 'link' => 'https://drive.google.com/file/d/1iD38LpH_VmleyK7OSUisrvf945A3t_X_/view'],
                                ['name' => 'BANDENG ASAP (Budidaya Ikan dengan Cetakan Kolam Berbasis Pendampingan)', 'link' => 'https://drive.google.com/file/d/1qaoXOnn0TvgHJ8iZdaY2lD6qG3EyB1Z1/view'],
                            ]
                        ],
                        [
                            'title' => 'Bidang Pelayanan dan Pengawasan Perikanan',
                            'color' => 'amber',
                            'items' => [
                                ['name' => 'SAPOK ANGIN (Optimalisasi Pokmaswas Untuk Melestarikan Lingkungan Pesisir Pantai)', 'link' => 'https://drive.google.com/file/d/1kVhzhcebUctr1To9WXj9pHvbEglY_KA6/view'],
                                ['name' => 'PUSAKA LAWAS (Pengembangan Usaha Perikanan Budidaya Melalui Optimalisasi Pengawasan)', 'link' => 'https://drive.google.com/file/d/12DcjSlR7TBfbT-QaE5rBspgCZkuV42X_/view'],
                                ['name' => 'GAMA SI GRANULA (Pendampingan Pembuatan Pas Kecil Gratis Untuk Kapal Nelayan)', 'link' => 'https://drive.google.com/file/d/1q8_MD6uriPPmjIdRxw8hXN24erUZdla7/view'],
                            ]
                        ],
                        [
                            'title' => 'Bidang Pengolahan dan Penguatan Daya Saing',
                            'color' => 'rose',
                            'items' => [
                                ['name' => 'CIKA DEWI (Cinta Ikan dengan Eduwisata)', 'link' => 'https://drive.google.com/file/d/1zonjzFk-UhAQmRR8q70NIx2w92M6d5L0/view'],
                                ['name' => 'GEMOI DI BAGASI (Gencar Promosi Ikan di Berbagai Sisi)', 'link' => 'https://drive.google.com/file/d/1TfWakFru7RwqKInnD2KHr0MQvi20AvhG/view'],
                                ['name' => 'DASI PAK HARI SERASI (Pendampingan dan Fasilitasi Pelaku Usaha Perikanan Secara Kerjasama dan Kolaborasi)', 'link' => 'https://drive.google.com/file/d/1qOQExOEWxRaOfOf63gT_GPNuaCmYpbft/view'],
                                ['name' => 'EMAK OLE DIPANDU (Edukasi Makan Olahan Lele di Posyandu)', 'link' => 'https://drive.google.com/file/d/1jCz9mXfmMbPZe4a_D70qpihFa91xHdpt/view'],
                            ]
                        ],
                    ];
                @endphp

                @foreach($bidangs as $bidang)
                    <div class="relative">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-12 h-12 rounded-2xl bg-{{ $bidang['color'] }}-100 flex items-center justify-center text-{{ $bidang['color'] }}-600 shadow-sm border border-{{ $bidang['color'] }}-200">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-slate-800 tracking-tight">{{ $bidang['title'] }}</h2>
                        </div>

                        <div class="grid grid-cols-1 gap-4">
                            @foreach($bidang['items'] as $item)
                                <a href="{{ $item['link'] }}" target="_blank" 
                                   class="group bg-white p-6 rounded-2xl shadow-sm border border-slate-100 hover:border-emerald-200 hover:shadow-md transition-all flex items-start justify-between gap-4">
                                    <div class="space-y-1">
                                        <h3 class="font-bold text-slate-700 group-hover:text-emerald-700 transition-colors leading-relaxed">
                                            {{ $item['name'] }}
                                        </h3>
                                        <p class="text-xs text-slate-400 flex items-center gap-1">
                                            <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" /></svg>
                                            Lihat Dokumen
                                        </p>
                                    </div>
                                    <div class="w-10 h-10 rounded-xl bg-slate-50 flex-shrink-0 flex items-center justify-center group-hover:bg-emerald-50 group-hover:text-emerald-600 transition-colors text-slate-400">
                                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                        </svg>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                @endforeach
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
@endsection