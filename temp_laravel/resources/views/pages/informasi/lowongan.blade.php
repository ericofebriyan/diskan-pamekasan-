@extends('layouts.app')

@section('title', 'Lowongan Kerja / Magang')

@section('content')
    <div class="pt-24 pb-12 bg-emerald-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center" data-aos="fade-down">
            <h1 class="text-4xl font-bold text-white mb-4">Karir & Magang</h1>
            <p class="text-emerald-100 text-lg">Informasi Lowongan Pekerjaan dan Penerimaan Magang</p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="text-center py-20 bg-slate-50 rounded-2xl border border-dashed border-slate-300">
            <div class="w-16 h-16 bg-slate-200 text-slate-400 rounded-full flex items-center justify-center mx-auto mb-4">
                <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                </svg>
            </div>
            <h2 class="text-2xl font-bold text-slate-600 mb-2">Belum Ada Lowongan Aktif</h2>
            <p class="text-slate-500">Saat ini belum ada informasi lowongan pekerjaan atau magang yang tersedia. Silakan cek
                kembali secara berkala.</p>
        </div>
    </div>
@endsection