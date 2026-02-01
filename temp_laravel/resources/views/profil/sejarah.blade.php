@extends('layouts.app')

@section('title', 'Gambaran Umum - Dinas Perikanan Kabupaten Pamekasan')

@section('content')
    <!-- Hero Section -->
    <div class="relative pt-32 pb-20 bg-emerald-900 overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <svg class="h-full w-full" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
                <path d="M0 100 C 20 0 50 0 100 100 Z"></path>
            </svg>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4 tracking-tight uppercase">Gambaran Umum</h1>
            <p class="text-emerald-200 text-lg md:text-xl max-w-3xl mx-auto">
                Mengenal lebih dekat Dinas Perikanan Kabupaten Pamekasan
            </p>
            <div class="mt-6 w-24 h-1.5 bg-yellow-400 mx-auto rounded-full"></div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-10 mb-20 relative z-20">
        <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border border-slate-100">
            <div class="grid grid-cols-1 lg:grid-cols-2">
                <!-- Text Content -->
                <div class="p-8 md:p-12 lg:p-16 space-y-8">
                    <div class="space-y-4">
                        <div class="inline-flex items-center px-4 py-1.5 rounded-full bg-emerald-50 text-emerald-700 text-sm font-bold uppercase tracking-wider border border-emerald-100 mb-2">
                            Profil Instansi
                        </div>
                        <h2 class="text-3xl font-bold text-slate-900 leading-tight uppercase">
                            DINAS PERIKANAN <br><span class="text-emerald-600">KABUPATEN PAMEKASAN</span>
                        </h2>
                    </div>

                    <div class="prose prose-lg max-w-none text-slate-600 leading-relaxed space-y-6 text-justify">
                        <p>
                            Dinas Perikanan Kabupaten Pamekasan sebagaimana diatur dalam Peraturan Daerah Kabupaten Pamekasan No. 9 Tahun 2022 tentang Pembentukan dan Susunan Perangkat Daerah, dan Peraturan Bupati Kabupaten Pamekasan No.21 Tahun 2023 tentang Kedudukan, Susunan Organisasi, Tugas dan Fungsi serta Tata Kerja Dinas Perikanan, mempunyai tugas membantu Bupati dalam melaksanakan urusan pemerintahan yang menjadi kewenangan daerah di bidang Perikanan serta tugas pembantuan yang diberikan kepada daerah. 
                        </p>
                        <p>
                            Dinas Perikanan dipimpin oleh Kepala Dinas yang berada di bawah dan bertanggung jawab kepada Bupati melalui Sekretaris Daerah.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 pt-6">
                        <div class="bg-slate-50 p-6 rounded-2xl border border-slate-100 group hover:bg-emerald-600 transition-colors duration-300">
                            <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center mb-4 group-hover:bg-white transition-colors duration-300">
                                <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                            </div>
                            <h4 class="font-bold text-slate-900 group-hover:text-white transition-colors">Dasar Hukum</h4>
                            <p class="text-sm text-slate-500 group-hover:text-emerald-50 transition-colors">Perda No. 9 Tahun 2022 & Perbup No. 21 Tahun 2023</p>
                        </div>
                        <div class="bg-slate-50 p-6 rounded-2xl border border-slate-100 group hover:bg-blue-600 transition-colors duration-300">
                            <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mb-4 group-hover:bg-white transition-colors duration-300">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                            </div>
                            <h4 class="font-bold text-slate-900 group-hover:text-white transition-colors">Kepemimpinan</h4>
                            <p class="text-sm text-slate-500 group-hover:text-blue-50 transition-colors">Bertanggung jawab kepada Bupati</p>
                        </div>
                    </div>
                </div>

                <!-- Image Side -->
                <div class="relative h-[400px] lg:h-auto overflow-hidden group">
                    <img src="{{ asset('images/profil/kantor-dinas.jpg') }}" alt="Kantor Dinas Perikanan Pamekasan" 
                         class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-l from-emerald-900/40 to-transparent"></div>
                    
                    <div class="absolute bottom-8 left-8 right-8 bg-white/10 backdrop-blur-md p-6 rounded-2xl border border-white/20">
                        <p class="text-white font-medium italic">
                            "Melayani dengan sepenuh hati untuk kesejahteraan nelayan dan masyarakat perikanan Pamekasan"
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection