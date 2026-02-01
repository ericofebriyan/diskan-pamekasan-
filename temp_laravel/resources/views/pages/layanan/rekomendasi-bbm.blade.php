@extends('layouts.app')

@section('title', 'Rekomendasi BBM - Dinas Perikanan Kabupaten Pamekasan')

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
                Layanan Rekomendasi Pembelian BBM Jenis Tertentu Bagi Pelaku Usaha Perikanan Di Kabupaten Pamekasan
            </h1>
            <div class="w-24 h-1 bg-yellow-400 mx-auto rounded-full"></div>
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
                        <img src="{{ asset('images/layanan/rekomendasi-bbm.jpg') }}" alt="Rekomendasi BBM" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-8">
                            <span class="bg-yellow-500 text-slate-900 px-4 py-2 rounded-xl text-sm font-bold shadow-lg">Layanan Subsidi BBM</span>
                        </div>
                    </div>

                    <!-- Text Content -->
                    <div class="p-8 md:p-12">
                        <div class="space-y-12">
                            
                            <!-- 1. Dasar Hukum -->
                            <section>
                                <h3 class="text-xl font-bold text-slate-900 mb-6 flex items-center gap-3">
                                    <span class="w-10 h-10 bg-emerald-100 text-emerald-600 rounded-xl flex items-center justify-center">
                                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" /></svg>
                                    </span>
                                    Dasar Hukum
                                </h3>
                                <ul class="space-y-3">
                                    <li class="flex items-start gap-3">
                                        <span class="text-emerald-500 mt-1">•</span>
                                        <span class="text-slate-600 text-sm leading-relaxed">Undang-Undang Nomor 22 Tahun 2001 tentang Minyak dan Gas Bumi</span>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <span class="text-emerald-500 mt-1">•</span>
                                        <span class="text-slate-600 text-sm leading-relaxed">Undang-Undang Nomor 23 Tahun 2014 tentang Pemerintahan Daerah</span>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <span class="text-emerald-500 mt-1">•</span>
                                        <span class="text-slate-600 text-sm leading-relaxed">Peraturan Presiden Nomor 191 Tahun 2014 tentang Penyediaan, Pendistribusian, dan Harga Jual Eceran Bahan Bakar Minyak</span>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <span class="text-emerald-500 mt-1">•</span>
                                        <span class="text-slate-600 text-sm leading-relaxed">Peraturan Menteri Energi dan Sumber Daya Mineral Nomor 18 Tahun 2013 tentang Penggunaan Jenis BBM Tertentu dan Jenis BBM Khusus Penugasan</span>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <span class="text-emerald-500 mt-1">•</span>
                                        <span class="text-slate-600 text-sm leading-relaxed">Peraturan Bupati Pamekasan Nomor 600 Tahun 2020 tentang Penunjukan Dinas Perikanan Kabupaten Pamekasan sebagai Instansi Teknis Penerbit Surat Rekomendasi Penggunaan BBM Jenis Tertentu sesuai dengan Izin Usaha/Kegiatan di Kabupaten Pamekasan</span>
                                    </li>
                                </ul>
                            </section>

                            <!-- 2. Persyaratan -->
                            <section class="bg-slate-50 rounded-3xl p-8 border border-slate-100">
                                <h3 class="text-xl font-bold text-slate-900 mb-6 flex items-center gap-3">
                                    <span class="w-10 h-10 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center">
                                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                                    </span>
                                    Persyaratan
                                </h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    @foreach([
                                        'Mengisi formulir permohonan',
                                        'Fotokopi KTP pemohon',
                                        'Fotokopi kartu kusuka / surat keterangan usaha di desa',
                                        'Fotokopi STP / STPL untuk kapal di atas 30 GT',
                                        'FC SPPT / sertifikat tanah atas nama pemohon untuk pembudidaya ikan / petambak garam',
                                        'Rekomendasi Kepala Desa',
                                        'FC SPBU tempat pengambilan BBM dan pengantar dari SPBU',
                                        'Surat pernyataan bermeterai tidak menjual kembali BBM',
                                        'Pas foto 3x4 sebanyak 2 lembar'
                                    ] as $item)
                                        <div class="flex items-center gap-3 bg-white p-3 rounded-xl border border-slate-200/60 shadow-sm">
                                            <svg class="w-5 h-5 text-emerald-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" /></svg>
                                            <span class="text-xs font-medium text-slate-700">{{ $item }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            </section>

                            <!-- 3. Prosedur -->
                            <section>
                                <h3 class="text-xl font-bold text-slate-900 mb-8 flex items-center gap-3">
                                    <span class="w-10 h-10 bg-orange-100 text-orange-600 rounded-xl flex items-center justify-center">
                                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" /></svg>
                                    </span>
                                    Prosedur Layanan
                                </h3>
                                <div class="space-y-4">
                                    @foreach([
                                        'Pendaftaran',
                                        'Pemberian Form Permohonan',
                                        'Penyerahan berkas ke petugas',
                                        'Verifikasi berkas permohonan oleh verifikator',
                                        'Mendokumentasikan dalam buku bantu dan elektronik',
                                        'Penomoran surat rekomendasi',
                                        'Pengarsipan surat rekomendasi',
                                        'Penyerahan surat rekomendasi ke pemohon',
                                        'Pemohon membeli BBM'
                                    ] as $index => $step)
                                        <div class="flex items-center gap-6 group">
                                            <div class="w-12 h-12 rounded-2xl bg-slate-100 text-slate-400 font-bold flex items-center justify-center group-hover:bg-emerald-600 group-hover:text-white transition-all duration-300 shadow-sm shrink-0">
                                                {{ $index + 1 }}
                                            </div>
                                            <div class="flex-1 p-4 bg-white border border-slate-100 rounded-2xl shadow-sm group-hover:border-emerald-200 group-hover:shadow-md transition-all">
                                                <p class="text-sm font-bold text-slate-800">{{ $step }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </section>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <!-- 4 & 5. Waktu & Biaya -->
                                <div class="space-y-4">
                                    <div class="p-6 rounded-3xl bg-indigo-50 border border-indigo-100 relative overflow-hidden group hover:shadow-lg transition-all">
                                        <div class="absolute -right-8 -bottom-8 w-24 h-24 bg-indigo-500/10 rounded-full group-hover:scale-150 transition-transform duration-700"></div>
                                        <h4 class="font-bold text-indigo-900 mb-2 flex items-center gap-2">
                                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                            Waktu Layanan
                                        </h4>
                                        <p class="text-sm text-indigo-700 leading-relaxed font-medium">
                                            1 jam (sejak berkas lengkap & terverifikasi)
                                        </p>
                                    </div>
                                    <div class="p-6 rounded-3xl bg-emerald-50 border border-emerald-100 relative overflow-hidden group hover:shadow-lg transition-all">
                                        <div class="absolute -right-8 -bottom-8 w-24 h-24 bg-emerald-500/10 rounded-full group-hover:scale-150 transition-transform duration-700"></div>
                                        <h4 class="font-bold text-emerald-900 mb-2 flex items-center gap-2">
                                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                            Biaya
                                        </h4>
                                        <p class="text-2xl font-black text-emerald-600 animate-pulse uppercase tracking-wider">Gratis!!</p>
                                    </div>
                                </div>

                                <!-- 6. Tempat Layanan -->
                                <div class="p-8 rounded-3xl bg-slate-900 text-white relative overflow-hidden shadow-2xl">
                                    <div class="absolute top-0 right-0 w-32 h-32 bg-emerald-500/10 rounded-full blur-3xl"></div>
                                    <h4 class="text-lg font-bold mb-6 flex items-center gap-3">
                                        <svg class="w-6 h-6 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                                        Tempat Layanan
                                    </h4>
                                    <div class="space-y-4 text-slate-300 text-sm leading-relaxed">
                                        <p class="font-bold text-white uppercase tracking-tight">Bidang Pelayanan dan Pengawasan Perikanan</p>
                                        <p>Dinas Perikanan Kabupaten Pamekasan</p>
                                        <p>Jl. KH. Wahid Hasyim No. 5, Pamekasan – 69321</p>
                                        <div class="pt-4 mt-4 border-t border-white/10">
                                            <p class="text-xs font-bold text-emerald-400 mb-1">Kontak Informasi:</p>
                                            <p class="text-lg font-bold text-white">0852 3300 2604</p>
                                        </div>
                                    </div>
                                </div>
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