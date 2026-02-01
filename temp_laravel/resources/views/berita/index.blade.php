@extends('layouts.app')

@section('title', 'Berita Terkini')

@section('content')
    <div class="pt-24 pb-12 bg-emerald-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-bold text-white mb-2 tracking-tight sm:text-4xl">Berita Terkini</h1>
            <p class="text-emerald-100 text-lg">Informasi terbaru seputar perikanan dan kelautan di Pamekasan.</p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

    @if($berita->count())
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            @foreach($berita as $item)
                <div
                    class="bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow overflow-hidden border border-slate-100 flex flex-col h-full group">
                    <div class="aspect-video bg-slate-200 relative overflow-hidden">
                        @if($item->gambar)
                            <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        @else
                            <div class="flex items-center justify-center h-full text-slate-400">
                                <span class="text-sm">No Image</span>
                            </div>
                        @endif
                        <div class="absolute top-2 right-2 bg-blue-600 text-white text-xs font-bold px-2 py-1 rounded-md shadow-sm">
                            {{ $item->kategori }}
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <div class="text-xs text-slate-500 mb-2 flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                            {{ ($item->tanggal_berita ?? $item->created_at)->format('d M Y') }}
                        </div>
                        <h2
                            class="text-xl font-bold text-slate-800 mb-3 line-clamp-2 leading-tight hover:text-blue-700 transition-colors">
                            <a href="{{ route('berita.show', $item->id) }}">
                                {{ $item->judul }}
                            </a>
                        </h2>
                        <p class="text-slate-600 text-sm line-clamp-3 mb-4 flex-grow">
                            {{ Str::limit(strip_tags($item->konten), 120) }}
                        </p>
                        <a href="{{ route('berita.show', $item->id) }}"
                            class="inline-flex items-center text-blue-600 font-semibold text-sm hover:text-blue-800 mt-auto">
                            Baca Selengkapnya
                            <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-8">
            {{ $berita->links() }}
        </div>
    @else
        <div class="text-center py-16 bg-white rounded-xl shadow-sm border border-dashed border-slate-300">
            <svg class="mx-auto h-12 w-12 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z">
                </path>
            </svg>
            <h3 class="mt-2 text-sm font-medium text-slate-900">Belum ada berita</h3>
            <p class="mt-1 text-sm text-slate-500">Berita terbaru akan muncul di sini.</p>
        </div>
    @endif
    </div>
@endsection