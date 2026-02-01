@extends('layouts.app')

@section('title', $data['title'] . ' - Dinas Perikanan Kabupaten Pamekasan')

@section('content')
    <!-- Hero Section -->
    <div class="pt-24 pb-12 bg-emerald-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-bold text-white mb-4 uppercase tracking-tight">{{ $data['title'] }}</h1>
            <p class="text-emerald-100 text-lg uppercase tracking-widest font-medium">Dinas Perikanan Kabupaten Pamekasan</p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-10 mb-20 relative z-20">
        <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border border-slate-100">
            @if(isset($data['image']))
                <div class="relative h-[300px] md:h-[450px] overflow-hidden group">
                    <img src="{{ asset($data['image']) }}" alt="{{ $data['title'] }}" 
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent"></div>
                    <div class="absolute bottom-8 left-8 right-8 text-white">
                        <div class="flex items-center gap-3 mb-2">
                             <div class="w-10 h-10 bg-{{ $data['color'] }}-600 rounded-lg flex items-center justify-center shadow-lg">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $data['icon'] }}" />
                                </svg>
                            </div>
                            <span class="font-bold tracking-widest uppercase text-sm">Dokumentasi Kegiatan</span>
                        </div>
                    </div>
                </div>
            @endif

            <div class="p-8 md:p-12 lg:p-16">
                <div class="flex flex-col md:flex-row gap-12 items-start">
                    <!-- Icon Section -->
                    <div class="w-full md:w-1/4 flex flex-col items-center">
                        <div class="w-32 h-32 bg-{{ $data['color'] }}-100 rounded-3xl flex items-center justify-center text-{{ $data['color'] }}-600 mb-6 shadow-inner ring-4 ring-{{ $data['color'] }}-50">
                            <svg class="w-16 h-16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $data['icon'] }}" />
                            </svg>
                        </div>
                        <div class="text-center">
                            <span class="text-sm font-bold text-{{ $data['color'] }}-700 uppercase tracking-widest bg-{{ $data['color'] }}-50 px-4 py-1.5 rounded-full border border-{{ $data['color'] }}-100">
                                Tupoksi Bidang
                            </span>
                        </div>
                    </div>

                    <!-- Functions List -->
                    <div class="w-full md:w-3/4 space-y-8">
                        <div>
                            <h2 class="text-2xl font-bold text-slate-900 mb-6 flex items-center gap-3">
                                <span class="w-8 h-8 bg-emerald-600 rounded-lg flex items-center justify-center text-white text-sm">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </span>
                                Rincian Tugas dan Fungsi
                            </h2>
                            <p class="text-slate-600 mb-8 italic">
                                Sesuai dengan Peraturan Bupati Pamekasan, {{ $data['title'] }} menyelenggarakan fungsi sebagai berikut:
                            </p>
                        </div>

                        <div class="grid grid-cols-1 gap-4">
                            @foreach($data['functions'] as $index => $fungsi)
                                <div class="group flex gap-5 p-5 bg-slate-50 hover:bg-white border border-transparent hover:border-emerald-200 rounded-2xl transition-all duration-300 hover:shadow-lg">
                                    <div class="flex-shrink-0 w-10 h-10 bg-white group-hover:bg-emerald-600 rounded-xl border border-slate-200 group-hover:border-emerald-600 flex items-center justify-center font-bold text-slate-400 group-hover:text-white transition-all shadow-sm">
                                        {{ $index + 1 }}
                                    </div>
                                    <p class="text-slate-700 leading-relaxed font-medium pt-1 group-hover:text-slate-900">
                                        {{ $fungsi }}
                                    </p>
                                </div>
                            @endforeach
                        </div>

                        <!-- Info Alert -->
                        <div class="mt-12 bg-blue-50 border-l-4 border-blue-500 p-6 rounded-r-2xl">
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 text-blue-500">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </div>
                                <p class="text-blue-800 text-sm leading-relaxed">
                                    Informasi ini disusun berdasarkan kebijakan teknis terbaru. Nelayan dan pelaku usaha perikanan di wilayah Pamekasan dapat berkonsultasi langsung dengan petugas bidang terkait di kantor Dinas Perikanan.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer Action -->
                <div class="mt-16 pt-10 border-t border-slate-100 flex flex-col md:flex-row justify-between items-center gap-6">
                    <a href="{{ url('/#layanan') }}" class="inline-flex items-center text-emerald-600 font-bold hover:text-emerald-800 transition-colors">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                        Kembali ke Bidang Pelayanan
                    </a>
                    <div class="flex gap-4">
                         <a href="{{ route('kontak') }}" class="px-8 py-3 bg-slate-900 text-white font-bold rounded-2xl hover:bg-slate-800 transition-all shadow-lg">
                            Konsultasi Langsung
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
