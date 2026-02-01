@extends('layouts.guest')

@section('content')
<div class="min-h-screen flex flex-col items-center justify-center text-center px-4">
    <div class="relative">
        <h1 class="text-9xl font-bold text-gray-200">500</h1>
        <p class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-2xl font-semibold text-rose-600 uppercase tracking-widest">
            Kesalahan Server
        </p>
    </div>
    
    <p class="mt-4 text-gray-600 max-w-md">
        Terjadi kesalahan internal pada server kami. Kami sedang berusaha memperbaikinya segera.
    </p>

    <div class="mt-8">
        <a href="{{ url('/') }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all duration-300 shadow-lg">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
            Kembali ke Beranda
        </a>
    </div>
</div>
@endsection
