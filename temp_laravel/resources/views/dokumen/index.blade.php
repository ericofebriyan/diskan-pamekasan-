@extends('layouts.app')

@section('title', 'Dokumen Publik')

@section('content')
    <div class="mb-10 text-center">
        <h1 class="text-3xl font-extrabold text-slate-900 tracking-tight sm:text-4xl mb-3">Dokumen Publik</h1>
        <p class="text-lg text-slate-600 max-w-2xl mx-auto">Unduh dokumen resmi, peraturan, dan laporan kinerja dinas.</p>
    </div>

    <div class="max-w-4xl mx-auto">
        @if($dokumen->count())
            <div class="bg-white shadow-sm rounded-lg border border-slate-200 divide-y divide-slate-100">
                @foreach($dokumen as $item)
                    <div class="p-6 sm:flex sm:items-center sm:justify-between hover:bg-slate-50 transition-colors">
                        <div class="flex-1 min-w-0 mb-4 sm:mb-0 sm:mr-6">
                            <div class="flex items-center mb-2">
                                <svg class="h-6 w-6 text-red-500 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 2H7a2 2 0 00-2 2v15a2 2 0 002 2z" />
                                </svg>
                                <h3 class="text-lg font-bold text-slate-900 truncate">{{ $item->judul }}</h3>
                            </div>
                            <p class="text-slate-500 text-sm ml-9 line-clamp-2">{{ $item->deskripsi }}</p>
                            <div class="mt-2 ml-9 flex items-center text-xs text-slate-400">
                                <span class="mr-3">{{ $item->created_at->format('d M Y') }}</span>
                                <span>•</span>
                                <span class="ml-3">PDF</span>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <a href="#"
                                class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors w-full sm:w-auto justify-center">
                                <svg class="-ml-1 mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                </svg>
                                Unduh
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mt-8">
                {{ $dokumen->links() }}
            </div>
        @else
            <div class="text-center py-20 bg-white rounded-lg shadow-sm border border-dashed border-slate-300">
                <svg class="mx-auto h-12 w-12 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                <h3 class="mt-2 text-sm font-medium text-slate-900">Belum ada dokumen</h3>
                <p class="mt-1 text-sm text-slate-500">Dokumen publik akan segera diunggah.</p>
            </div>
        @endif
    </div>
@endsection