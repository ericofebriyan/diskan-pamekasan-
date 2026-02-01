@extends('layouts.app')

@section('title', $berita->judul)

@section('content')
    <div class="pt-24 pb-12 bg-emerald-700 mb-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
             <h1 class="text-3xl sm:text-4xl font-extrabold text-white leading-tight mb-4">
                {{ $berita->judul }}
            </h1>
            <div class="flex items-center justify-center text-emerald-100 text-sm space-x-4">
                <span class="flex items-center">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                        </path>
                    </svg>
                    {{ ($berita->tanggal_berita ?? $berita->created_at)->format('d F Y') }}
                </span>
                <span class="bg-white/20 text-white text-xs font-semibold px-2.5 py-0.5 rounded backdrop-blur-sm">
                    {{ $berita->kategori }}
                </span>
            </div>
        </div>
    </div>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 pb-12">
        <div class="mb-8">
            <a href="{{ route('berita.index') }}"
                class="inline-flex items-center text-slate-500 hover:text-emerald-700 transition-all group mb-6">
                <svg class="w-5 h-5 mr-2 transform group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                <span class="font-medium">Kembali ke Berita</span>
            </a>

            @if($berita->gambar)
                <div class="rounded-2xl overflow-hidden shadow-2xl mb-10 max-w-3xl mx-auto border-4 border-white">
                    <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}"
                        class="w-full h-[400px] object-cover object-center">
                </div>
            @endif

            <div class="prose prose-slate lg:prose-xl max-w-none text-slate-700 leading-relaxed">
                {!! nl2br(e($berita->konten)) !!}
            </div>
        </div>
    </div>
@endsection