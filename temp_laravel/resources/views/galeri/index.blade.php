@extends('layouts.app')

@section('title', 'Galeri Kegiatan - Dinas Perikanan Pamekasan')

@section('content')
    <div class="min-h-screen bg-slate-50 pt-24 pb-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Header Section -->
            <div class="text-center mb-12 mt-8 md:mt-12">
                <h1 class="font-outfit text-4xl md:text-5xl font-bold text-slate-800 mb-4 tracking-tight">
                    Galeri Kegiatan
                </h1>
                <p class="text-slate-600 text-lg max-w-2xl mx-auto font-light">
                    Dokumentasi visual kegiatan dan program kerja Dinas Perikanan Kabupaten Pamekasan dalam melayani
                    masyarakat.
                </p>
                <div class="mt-6 w-24 h-1.5 bg-emerald-500 rounded-full mx-auto"></div>
            </div>

            <!-- Photo Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @forelse($galeri as $item)
                    <div class="group relative rounded-2xl overflow-hidden shadow-lg bg-white aspect-square cursor-pointer">
                        <!-- Image -->
                        <img src="{{ asset('storage/' . $item->image_path) }}" alt="{{ $item->title }}"
                            class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 ease-in-out">

                        <!-- Overlay Gradient -->
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>

                        <!-- Content Overlay -->
                        <div
                            class="absolute bottom-0 left-0 w-full p-6 translate-y-4 group-hover:translate-y-0 transition-transform duration-300 opacity-0 group-hover:opacity-100">
                            <span
                                class="inline-block px-3 py-1 bg-emerald-600 text-white text-[10px] uppercase font-bold tracking-wider rounded-full mb-2">
                                Kegiatan
                            </span>
                            <h3 class="text-white font-bold text-lg leading-tight line-clamp-2 drop-shadow-md">
                                {{ $item->description }}
                            </h3>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full flex flex-col items-center justify-center py-20 text-slate-400">
                        <svg class="w-16 h-16 mb-4 text-slate-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <p class="text-lg font-medium">Belum ada dokumentasi kegiatan.</p>
                    </div>
                @endforelse
            </div>

            <!-- Pagination -->
            <div class="mt-12">
                {{ $galeri->links() }}
            </div>
        </div>
    </div>
@endsection