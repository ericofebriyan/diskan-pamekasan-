@extends('layouts.app')

@section('title', 'Agenda Kegiatan')

@section('content')
    <div class="mb-10 text-center">
        <h1 class="text-3xl font-extrabold text-slate-900 tracking-tight sm:text-4xl mb-3">Agenda Kegiatan</h1>
        <p class="text-lg text-slate-600 max-w-2xl mx-auto">Jadwal kegiatan dan acara mendatang Dinas Perikanan.</p>
    </div>

    <div class="max-w-3xl mx-auto">
        @if($agenda->count())
            <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
                <div class="divide-y divide-slate-100">
                    @foreach($agenda as $item)
                        <div class="p-6 hover:bg-slate-50 transition-colors group">
                            <div class="flex items-start">
                                <div
                                    class="flex-shrink-0 mr-6 text-center bg-blue-50 rounded-lg p-3 min-w-[5rem] border border-blue-100 group-hover:border-blue-200 transition-colors">
                                    <span
                                        class="block text-3xl font-bold text-blue-600 tracking-tighter">{{ $item->tanggal->format('d') }}</span>
                                    <span
                                        class="block text-xs font-bold text-blue-800 uppercase tracking-wide mt-1">{{ $item->tanggal->format('M Y') }}</span>
                                </div>
                                <div class="flex-1 min-w-0 pt-1">
                                    <h3 class="text-xl font-bold text-slate-800 mb-2 group-hover:text-blue-700 transition-colors">
                                        {{ $item->judul }}</h3>
                                    <div class="flex items-center text-slate-500 text-sm mb-3">
                                        <svg class="h-4 w-4 mr-1.5 text-slate-400" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        {{ $item->lokasi }}
                                    </div>
                                    @if($item->deskripsi)
                                        <p class="text-slate-600 text-sm leading-relaxed">{{ $item->deskripsi }}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="mt-8">
                {{ $agenda->links() }}
            </div>
        @else
            <div class="text-center py-20 bg-white rounded-xl shadow-sm border border-dashed border-slate-300">
                <svg class="mx-auto h-12 w-12 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <h3 class="mt-2 text-sm font-medium text-slate-900">Belum ada agenda</h3>
                <p class="mt-1 text-sm text-slate-500">Jadwal kegiatan akan segera diperbarui.</p>
            </div>
        @endif
    </div>
@endsection