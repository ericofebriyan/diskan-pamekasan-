@extends('layouts.app')

@section('title', 'Struktur Organisasi - Dinas Perikanan Kabupaten Pamekasan')

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
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4 tracking-tight uppercase">Struktur Organisasi</h1>
            <p class="text-emerald-200 text-lg md:text-xl max-w-3xl mx-auto">
                Susunan Organisasi Dinas Perikanan Kabupaten Pamekasan
            </p>
            <div class="mt-6 w-24 h-1.5 bg-yellow-400 mx-auto rounded-full"></div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-10 mb-20 relative z-20">
        <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border border-slate-100">
            <div class="p-8 md:p-12 lg:p-16">
                <!-- Description Section -->
                <div class="max-w-4xl mx-auto text-center mb-16 space-y-6">
                    <div class="inline-flex items-center px-4 py-1.5 rounded-full bg-emerald-50 text-emerald-700 text-sm font-bold uppercase tracking-wider border border-emerald-100 mb-2">
                        Dasar Hukum Organisasi
                    </div>
                    <p class="text-slate-600 text-lg leading-relaxed">
                        Susunan Organisasi Dinas Perikanan Kabupaten Pamekasan yang diatur dalam <strong>Peraturan Daerah No. 9 Tahun 2022</strong> tentang Pembentukan dan Susunan Perangkat Daerah dan <strong>Peraturan Bupati No. 21 Tahun 2023</strong> tentang Kedudukan, Susunan Organisasi, Tugas dan Fungsi, serta Tata Kerja Dinas Perikanan sebagai berikut:
                    </p>
                </div>

                <!-- Image Section -->
                <div class="relative group max-w-5xl mx-auto">
                    <div class="absolute -inset-1 bg-gradient-to-r from-emerald-100 to-blue-100 rounded-[2rem] blur opacity-25 group-hover:opacity-50 transition duration-1000 group-hover:duration-200"></div>
                    <div class="relative bg-white p-4 md:p-8 rounded-[2rem] border border-slate-100 shadow-sm">
                        <div class="overflow-hidden rounded-xl bg-slate-50 border border-slate-200">
                            <img src="{{ asset('images/profil/struktur-organisasi.png') }}" 
                                 alt="Bagan Struktur Organisasi Dinas Perikanan Pamekasan" 
                                 class="w-full h-auto transition-transform duration-500 hover:scale-[1.01]">
                        </div>
                        
                        <!-- Caption/Note -->
                        <div class="mt-8 flex items-center justify-center gap-3 text-slate-500 text-sm italic">
                            <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            Bagan Struktur Organisasi Terbaru Sesuai Perbup No. 21 Tahun 2023
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection