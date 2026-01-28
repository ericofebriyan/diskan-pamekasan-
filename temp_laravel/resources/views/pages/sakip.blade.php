@extends('layouts.app')

@section('title', 'SAKIP - Dinas Perikanan Kabupaten Pamekasan')

@section('content')
    <div class="pt-24 pb-12 bg-emerald-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-bold text-white mb-4">SAKIP</h1>
            <p class="text-emerald-100 text-lg">Sistem Akuntabilitas Kinerja Instansi Pemerintah</p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-white rounded-lg shadow-sm p-8 min-h-[400px]">
            <div class="space-y-4">
                <h3 class="text-xl font-bold text-gray-800">Dokumen SAKIP</h3>
                <div class="grid gap-4">
                    <a href="#" class="block p-4 border rounded hover:bg-gray-50 flex justify-between items-center group">
                        <span class="font-medium group-hover:text-emerald-700">Rencana Strategis (Renstra)</span>
                        <span class="text-gray-400">&darr;</span>
                    </a>
                    <a href="#" class="block p-4 border rounded hover:bg-gray-50 flex justify-between items-center group">
                        <span class="font-medium group-hover:text-emerald-700">Indikator Kinerja Utama (IKU)</span>
                        <span class="text-gray-400">&darr;</span>
                    </a>
                    <a href="#" class="block p-4 border rounded hover:bg-gray-50 flex justify-between items-center group">
                        <span class="font-medium group-hover:text-emerald-700">Laporan Kinerja Instansi Pemerintah
                            (LKjIP)</span>
                        <span class="text-gray-400">&darr;</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection