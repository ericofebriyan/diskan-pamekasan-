@extends('layouts.app')

@section('title', 'PPID - Dinas Perikanan Kabupaten Pamekasan')

@section('content')
    <div class="pt-24 pb-12 bg-emerald-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-bold text-white mb-4">PPID</h1>
            <p class="text-emerald-100 text-lg">Pejabat Pengelola Informasi dan Dokumentasi</p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-white rounded-lg shadow-sm p-8 min-h-[400px]">
            <p class="text-gray-600 mb-6">Layanan informasi publik Dinas Perikanan Kabupaten Pamekasan.</p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <a href="#" class="block p-6 border border-emerald-100 bg-emerald-50 rounded-lg hover:shadow-md">
                    <h3 class="text-lg font-bold text-emerald-800 mb-2">Informasi Berkala</h3>
                    <p class="text-sm text-gray-600">Informasi yang wajib disediakan dan diumumkan secara berkala.</p>
                </a>
                <a href="#" class="block p-6 border border-emerald-100 bg-emerald-50 rounded-lg hover:shadow-md">
                    <h3 class="text-lg font-bold text-emerald-800 mb-2">Informasi Serta Merta</h3>
                    <p class="text-sm text-gray-600">Informasi yang dapat mengancam hajat hidup orang banyak dan ketertiban
                        umum.</p>
                </a>
                <a href="#" class="block p-6 border border-emerald-100 bg-emerald-50 rounded-lg hover:shadow-md">
                    <h3 class="text-lg font-bold text-emerald-800 mb-2">Informasi Setiap Saat</h3>
                    <p class="text-sm text-gray-600">Informasi yang wajib tersedia setiap saat.</p>
                </a>
                <a href="#" class="block p-6 border border-emerald-100 bg-emerald-50 rounded-lg hover:shadow-md">
                    <h3 class="text-lg font-bold text-emerald-800 mb-2">Permohonan Informasi</h3>
                    <p class="text-sm text-gray-600">Formulir permohonan informasi publik.</p>
                </a>
            </div>
        </div>
    </div>
@endsection