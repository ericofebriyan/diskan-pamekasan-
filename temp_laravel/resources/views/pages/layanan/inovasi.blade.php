@extends('layouts.app')

@section('title', 'Inovasi Pelayanan - Dinas Perikanan Kabupaten Pamekasan')

@section('content')
    <div class="pt-24 pb-12 bg-emerald-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-bold text-white mb-4">Inovasi Pelayanan</h1>
            <p class="text-emerald-100 text-lg">Terobosan Baru Untuk Efisiensi dan Kemudahan Masyarakat</p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 gap-8">
            <!-- Inovasi 1 -->
            <div class="bg-white rounded-lg shadow-sm border border-slate-100 overflow-hidden flex flex-col md:flex-row">
                <div class="md:w-1/3 bg-blue-50 flex items-center justify-center p-8">
                    <svg class="w-24 h-24 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <div class="p-8 md:w-2/3">
                    <h3 class="text-2xl font-bold text-slate-800 mb-3">Si-Pintar (Sistem Informasi Perikanan Terpadu)</h3>
                    <p class="text-slate-600 mb-4">Aplikasi berbasis data yang mengintegrasikan informasi produksi,
                        pembudidaya, dan nelayan untuk memudahkan pemantauan dan pengambilan kebijakan.</p>
                    <span
                        class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full font-semibold uppercase tracking-wide">Digital</span>
                </div>
            </div>

            <!-- Inovasi 2 -->
            <div class="bg-white rounded-lg shadow-sm border border-slate-100 overflow-hidden flex flex-col md:flex-row">
                <div class="md:w-1/3 bg-emerald-50 flex items-center justify-center p-8">
                    <svg class="w-24 h-24 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div class="p-8 md:w-2/3">
                    <h3 class="text-2xl font-bold text-slate-800 mb-3">Layanan Jemput Bola (Jempol)</h3>
                    <p class="text-slate-600 mb-4">Tim kami turun langsung ke lapangan untuk membantu pengurusan dokumen
                        perizinan nelayan kecil, sehingga mereka tidak perlu meninggalkan pekerjaannya.</p>
                    <span
                        class="inline-block bg-emerald-100 text-emerald-800 text-xs px-2 py-1 rounded-full font-semibold uppercase tracking-wide">Pelayanan
                        Publik</span>
                </div>
            </div>
        </div>
    </div>
@endsection