@extends('layouts.app')

@section('title', $berita->judul)

@section('content')
    <div class="max-w-4xl mx-auto">
        <div class="mb-6">
            <a href="{{ route('berita.index') }}"
                class="inline-flex items-center text-slate-500 hover:text-blue-700 transition-colors mb-4">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18">
                    </path>
                </svg>
                Kembali ke Berita
            </a>
            <h1 class="text-3xl sm:text-4xl font-extrabold text-slate-900 leading-tight mb-4">
                {{ $berita->judul }}
            </h1>
            <div class="flex items-center text-slate-500 text-sm space-x-4">
                <span class="flex items-center">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                        </path>
                    </svg>
                    {{ $berita->created_at->format('d F Y') }}
                </span>
                <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded">
                    {{ $berita->kategori }}
                </span>
            </div>
        </div>

        @if($berita->gambar)
            <div class="rounded-xl overflow-hidden shadow-sm mb-8">
                <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}"
                    class="w-full h-auto object-cover">
            </div>
        @endif

        <div class="prose prose-slate lg:prose-lg max-w-none text-slate-800 leading-relaxed">
            {!! nl2br(e($berita->konten)) !!}
        </div>
    </div>
@endsection