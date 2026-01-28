@extends('layouts.app')

@section('title', 'Struktur Organisasi - Dinas Perikanan Kabupaten Pamekasan')

@section('content')
    <div class="pt-24 pb-12 bg-emerald-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-bold text-white mb-4">Struktur Organisasi</h1>
            <p class="text-emerald-100 text-lg">Bagan Struktur Organisasi Dinas Perikanan</p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-white rounded-lg shadow-sm p-8 min-h-[400px] flex justify-center">
            <div class="text-center">
                <p class="text-gray-600 mb-6">Gambar Struktur Organisasi</p>
                <div
                    class="w-full max-w-4xl h-96 bg-gray-100 border-2 border-dashed border-gray-300 rounded-lg flex items-center justify-center">
                    <span>[Bagan Organisasi Image]</span>
                </div>
            </div>
        </div>
    </div>
@endsection