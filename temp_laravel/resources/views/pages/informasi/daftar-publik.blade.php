@extends('layouts.app')

@section('title', 'Daftar Informasi Publik')

@section('content')
    <div class="pt-24 pb-12 bg-emerald-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center" data-aos="fade-down">
            <h1 class="text-4xl font-bold text-white mb-4">Daftar Informasi Publik</h1>
            <p class="text-emerald-100 text-lg">Informasi Berkala, Serta Merta, dan Setiap Saat</p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <!-- Tabs / Categories -->
        <div class="flex flex-col md:flex-row justify-center gap-4 mb-12" data-aos="fade-up">
            <button class="bg-emerald-600 text-white px-6 py-2 rounded-full font-bold shadow-md">Semua</button>
            <button
                class="bg-white text-slate-700 hover:bg-emerald-50 px-6 py-2 rounded-full font-bold shadow-sm border border-slate-200">Berkala</button>
            <button
                class="bg-white text-slate-700 hover:bg-emerald-50 px-6 py-2 rounded-full font-bold shadow-sm border border-slate-200">Serta
                Merta</button>
            <button
                class="bg-white text-slate-700 hover:bg-emerald-50 px-6 py-2 rounded-full font-bold shadow-sm border border-slate-200">Setiap
                Saat</button>
            <button
                class="bg-white text-slate-700 hover:bg-emerald-50 px-6 py-2 rounded-full font-bold shadow-sm border border-slate-200">Dikecualikan</button>
        </div>

        <!-- List -->
        <div class="grid grid-cols-1 gap-6">
            <!-- Item 1 -->
            <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-100 flex items-start sm:items-center gap-4 hover:shadow-md transition-shadow"
                data-aos="fade-up" data-aos-delay="100">
                <div
                    class="w-12 h-12 bg-blue-100 text-blue-600 rounded-lg flex-shrink-0 flex items-center justify-center font-bold text-lg">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </div>
                <div class="flex-grow">
                    <h3 class="font-bold text-slate-800 text-lg">Profil Pimpinan dan Pejabat Struktural</h3>
                    <p class="text-slate-500 text-sm">Informasi Berkala</p>
                </div>
                <a href="{{ route('profil.kepaladinas') }}"
                    class="text-emerald-600 font-semibold text-sm hover:underline">Lihat Detail</a>
            </div>

            <!-- Item 2 -->
            <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-100 flex items-start sm:items-center gap-4 hover:shadow-md transition-shadow"
                data-aos="fade-up" data-aos-delay="200">
                <div
                    class="w-12 h-12 bg-green-100 text-green-600 rounded-lg flex-shrink-0 flex items-center justify-center font-bold text-lg">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
                <div class="flex-grow">
                    <h3 class="font-bold text-slate-800 text-lg">Ringkasan Laporan Keuangan</h3>
                    <p class="text-slate-500 text-sm">Informasi Berkala</p>
                </div>
                <a href="{{ route('sakip.lra') }}" class="text-emerald-600 font-semibold text-sm hover:underline">Lihat
                    Detail</a>
            </div>

            <!-- Item 3 -->
            <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-100 flex items-start sm:items-center gap-4 hover:shadow-md transition-shadow"
                data-aos="fade-up" data-aos-delay="300">
                <div
                    class="w-12 h-12 bg-orange-100 text-orange-600 rounded-lg flex-shrink-0 flex items-center justify-center font-bold text-lg">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                    </svg>
                </div>
                <div class="flex-grow">
                    <h3 class="font-bold text-slate-800 text-lg">Pengumuman Bencana Alam / Non-Alam</h3>
                    <p class="text-slate-500 text-sm">Informasi Serta Merta</p>
                </div>
                <a href="#" class="text-emerald-600 font-semibold text-sm hover:underline">Lihat Detail</a>
            </div>
        </div>
    </div>
@endsection