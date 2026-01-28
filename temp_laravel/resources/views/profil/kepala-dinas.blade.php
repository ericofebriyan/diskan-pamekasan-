@extends('layouts.app')

@section('title', 'Kepala Dinas - Dinas Perikanan Kabupaten Pamekasan')

@section('content')
    <div class="pt-24 pb-12 bg-emerald-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-bold text-white mb-4">Kepala Dinas</h1>
            <p class="text-emerald-100 text-lg">Profil Kepala Dinas Perikanan Kabupaten Pamekasan</p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-white rounded-lg shadow-sm p-8 min-h-[400px]">
            <div class="flex flex-col md:flex-row items-center md:items-start gap-8">
                <div class="w-full md:w-1/3">
                    <div class="aspect-[3/4] bg-gray-200 rounded-lg flex items-center justify-center text-gray-400">
                        <!-- Placeholder for image -->
                        <svg class="h-24 w-24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                </div>
                <div class="w-full md:w-2/3">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">Nama Kepala Dinas</h2>
                    <div class="prose max-w-none text-gray-600">
                        <p>Sambutan atau profil singkat Kepala Dinas akan ditampilkan di sini.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection