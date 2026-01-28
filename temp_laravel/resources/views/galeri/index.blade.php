@extends('layouts.app')

@section('title', 'Galeri Kegiatan')

@section('content')
    <div class="mb-10 text-center">
        <h1 class="text-3xl font-extrabold text-slate-900 tracking-tight sm:text-4xl mb-3">Galeri Kegiatan</h1>
        <p class="text-lg text-slate-600 max-w-2xl mx-auto">Dokumentasi kegiatan dan aktivitas Dinas Perikanan Kabupaten
            Pamekasan.</p>
    </div>

    @if($galeri->count())
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($galeri as $item)
                <div
                    class="group relative bg-white rounded-lg shadow-sm overflow-hidden border border-slate-200 hover:shadow-lg transition-all duration-300">
                    <div class="aspect-square bg-slate-100 relative overflow-hidden">
                        @if($item->gambar)
                            <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        @else
                            <div class="flex items-center justify-center h-full text-slate-400">
                                <svg class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                        @endif
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-4">
                            <h3 class="text-white font-bold text-lg leading-tight">{{ $item->judul }}</h3>
                            @if($item->deskripsi)
                                <p class="text-slate-300 text-sm mt-1 line-clamp-2">{{ $item->deskripsi }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-10">
            {{ $galeri->links() }}
        </div>
    @else
        <div class="text-center py-20">
            <div class="bg-gray-50 rounded-full h-20 w-20 flex items-center justify-center mx-auto mb-4">
                <svg class="h-10 w-10 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
            </div>
            <h3 class="text-lg font-medium text-gray-900">Belum ada galeri</h3>
            <p class="text-gray-500">Foto kegiatan akan segera diunggah.</p>
        </div>
    @endif
@endsection