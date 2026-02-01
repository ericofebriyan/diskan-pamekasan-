@extends('layouts.app')

@section('title', 'Balai Benih Ikan - Dinas Perikanan Kabupaten Pamekasan')

@section('content')
    <!-- Hero Section -->
    <div class="pt-24 pb-12 bg-emerald-700 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                <path d="M0 100 C 20 0 50 0 100 100 Z" fill="white"></path>
            </svg>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white relative z-10">
            <h1 class="text-3xl md:text-4xl font-bold mb-4 leading-tight">
                Temukan Solusi Terbaik untuk Budidaya Ikan Anda dengan Layanan Balai Benih Ikan Kami!
            </h1>
            <div class="w-24 h-1 bg-blue-400 mx-auto rounded-full"></div>
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
                        <img src="{{ asset('images/layanan/balai-benih.jpg') }}" alt="Balai Benih Ikan" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-8">
                            <span class="bg-blue-600 text-white px-4 py-2 rounded-xl text-sm font-bold shadow-lg">Fasilitas Pembenihan Utama</span>
                        </div>
                    </div>

                    <!-- Text Content -->
                    <div class="p-8 md:p-12">
                        <div class="prose prose-lg max-w-none text-slate-700 leading-relaxed">
                            <p class="font-medium text-slate-900 border-l-4 border-emerald-500 pl-4 py-1 italic mb-8">
                                Apakah Anda seorang pengusaha perikanan yang ingin meningkatkan hasil panen, atau seorang penghobi yang baru memulai usaha budidaya ikan? Layanan Balai Benih Ikan kami adalah solusi tepat untuk memenuhi kebutuhan benih ikan berkualitas tinggi yang Anda cari!
                            </p>

                            <h3 class="text-2xl font-bold text-slate-900 mb-6 flex items-center gap-3">
                                <span class="w-10 h-10 bg-emerald-100 text-emerald-600 rounded-xl flex items-center justify-center">
                                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                </span>
                                Mengapa Memilih Balai Benih Ikan Kami?
                            </h3>

                            <div class="grid grid-cols-1 gap-8 mb-12">
                                <div class="flex gap-4 p-6 bg-slate-50 rounded-2xl border border-slate-100">
                                    <div class="flex-shrink-0 w-12 h-12 bg-white rounded-xl shadow-sm flex items-center justify-center text-emerald-600 font-bold text-lg italic">1</div>
                                    <div>
                                        <h4 class="font-bold text-slate-900 mb-2">Benih Berkualitas Tinggi</h4>
                                        <p class="text-slate-600 text-sm">Kami menyediakan berbagai jenis benih ikan unggul yang telah melalui proses seleksi ketat untuk memastikan kesehatan dan kualitas terbaik. Benih ikan kami memiliki kualitas dan kesehatan yang bagus, sehingga Anda bisa yakin bahwa ikan yang Anda budidayakan akan tumbuh optimal.</p>
                                    </div>
                                </div>

                                <div class="flex gap-4 p-6 bg-slate-50 rounded-2xl border border-slate-100">
                                    <div class="flex-shrink-0 w-12 h-12 bg-white rounded-xl shadow-sm flex items-center justify-center text-emerald-600 font-bold text-lg italic">2</div>
                                    <div>
                                        <h4 class="font-bold text-slate-900 mb-2">Dukungan Teknis dan Konsultasi</h4>
                                        <p class="text-slate-600 text-sm">Tidak hanya menyediakan benih ikan, kami juga menawarkan layanan konsultasi dan dukungan teknis untuk membantu Anda dalam setiap tahap budidaya. Tim ahli kami siap memberikan bimbingan mengenai teknik budidaya, pakan, dan manajemen kesehatan ikan.</p>
                                    </div>
                                </div>

                                <div class="flex gap-4 p-6 bg-slate-50 rounded-2xl border border-slate-100">
                                    <div class="flex-shrink-0 w-12 h-12 bg-white rounded-xl shadow-sm flex items-center justify-center text-emerald-600 font-bold text-lg italic">3</div>
                                    <div>
                                        <h4 class="font-bold text-slate-900 mb-2">Varietas Benih yang Beragam</h4>
                                        <p class="text-slate-600 text-sm">Dari ikan konsumsi hingga ikan hias, kami menawarkan berbagai varietas benih yang dapat disesuaikan dengan kebutuhan dan preferensi Anda. Apakah Anda tertarik dengan ikan Lele, Nila, Gurame, Tawes, Tombro, atau ikan Koi, kami memiliki solusi untuk setiap jenis ikan yang Anda inginkan.</p>
                                    </div>
                                </div>

                                <div class="flex gap-4 p-6 bg-slate-50 rounded-2xl border border-slate-100">
                                    <div class="flex-shrink-0 w-12 h-12 bg-white rounded-xl shadow-sm flex items-center justify-center text-emerald-600 font-bold text-lg italic">4</div>
                                    <div>
                                        <h4 class="font-bold text-slate-900 mb-2">Harga Kompetitif</h4>
                                        <p class="text-slate-600 text-sm">Kami menawarkan harga yang bersaing tanpa mengorbankan kualitas. Dengan harga yang terjangkau, Anda bisa mendapatkan benih ikan berkualitas tanpa perlu khawatir mengenai anggaran.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-slate-900 text-white rounded-3xl p-8 mb-12 shadow-2xl relative overflow-hidden">
                                <div class="absolute top-0 right-0 w-32 h-32 bg-emerald-500/10 rounded-full blur-3xl"></div>
                                <h4 class="text-xl font-bold mb-4 flex items-center gap-3">
                                    <svg class="w-6 h-6 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" /></svg>
                                    Cara Memesan Benih Ikan
                                </h4>
                                <p class="text-slate-300 leading-relaxed mb-0">
                                    Memesan benih ikan dari kami sangat mudah! Anda hanya perlu menghubungi tim layanan pelanggan kami melalui telepon, dan kami akan membantu Anda dalam memilih jenis benih yang sesuai dengan kebutuhan Anda. Kami juga menyediakan layanan pemesanan online untuk kenyamanan Anda.
                                </p>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="p-6 rounded-2xl bg-emerald-50 border border-emerald-100">
                                    <h5 class="font-bold text-emerald-900 mb-4 flex items-center gap-2">
                                        <svg class="w-5 h-5 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                                        Hubungi Kami
                                    </h5>
                                    <ul class="space-y-2 text-slate-700">
                                        <li class="flex items-center gap-2">
                                            <span class="text-sm font-bold">Telepon:</span>
                                            <a href="tel:085336489549" class="text-sm hover:text-emerald-600 transition-colors">085336489549 (Ismail)</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="p-6 rounded-2xl bg-blue-50 border border-blue-100">
                                    <h5 class="font-bold text-blue-900 mb-4 flex items-center gap-2">
                                        <svg class="w-5 h-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                                        Alamat Kantor
                                    </h5>
                                    <p class="text-sm text-slate-700 leading-relaxed">
                                        Balai Benih Ikan Teja Timur, Desa Teja Timur, Kecamatan Pamekasan, Kabupaten Pamekasan.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-12 p-8 border-t border-slate-100 text-center">
                            <p class="text-slate-500 font-medium italic">
                                "Jangan ragu untuk menghubungi kami dan temukan bagaimana layanan Balai Benih Ikan kami dapat membantu Anda meraih kesuksesan dalam budidaya ikan. Kami siap mendukung Anda setiap langkahnya!"
                            </p>
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