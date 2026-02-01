<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Welcome Section -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-2xl mb-8 border border-emerald-100">
                <div class="p-8 flex items-center gap-6">
                    <div class="w-16 h-16 bg-emerald-100 rounded-full flex items-center justify-center text-emerald-600">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-slate-800">Selamat Datang, {{ auth()->user()->name }}!</h3>
                        <p class="text-slate-500">Gunakan panel ini untuk mengelola konten website Dinas Perikanan Kabupaten Pamekasan.</p>
                    </div>
                </div>
            </div>

            <!-- Management Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Berita -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 hover:shadow-xl transition-all duration-300 group">
                    <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center text-blue-600 mb-4 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                        </svg>
                    </div>
                    <h4 class="text-lg font-bold text-slate-800 mb-1">Berita</h4>
                    <p class="text-sm text-slate-500 mb-4">Kelola informasi dan berita terkini.</p>
                    <div class="flex flex-col gap-2">
                        <a href="{{ route('admin.berita.index') }}" class="inline-flex items-center text-blue-600 font-semibold text-sm hover:text-blue-800">
                            Lihat Semua Berita &rarr;
                        </a>
                        <a href="{{ route('admin.berita.create') }}" class="mt-2 text-center bg-blue-600 hover:bg-blue-700 text-white text-xs font-bold py-2 px-4 rounded-xl transition-all">
                            + Tambah Berita Baru
                        </a>
                    </div>
                </div>

                <!-- Galeri -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 hover:shadow-xl transition-all duration-300 group">
                    <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center text-emerald-600 mb-4 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h4 class="text-lg font-bold text-slate-800 mb-1">Galeri Foto</h4>
                    <p class="text-sm text-slate-500 mb-4">Update dokumentasi kegiatan.</p>
                    <div class="flex flex-col gap-2">
                        <a href="{{ route('admin.galeri.index') }}" class="inline-flex items-center text-emerald-600 font-semibold text-sm hover:text-emerald-800">
                            Lihat Galeri &rarr;
                        </a>
                        <a href="{{ route('admin.galeri.create') }}" class="mt-2 text-center bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-bold py-2 px-4 rounded-xl transition-all">
                            + Tambah Foto/Video
                        </a>
                    </div>
                </div>

                <!-- Dokumen -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 hover:shadow-xl transition-all duration-300 group">
                    <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center text-purple-600 mb-4 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h4 class="text-lg font-bold text-slate-800 mb-1">Dokumen</h4>
                    <p class="text-sm text-slate-500 mb-4">Unggah dokumen dan laporan publik.</p>
                    <div class="flex flex-col gap-2">
                        <a href="{{ route('admin.dokumen.index') }}" class="inline-flex items-center text-purple-600 font-semibold text-sm hover:text-purple-800">
                            Lihat Semua Dokumen &rarr;
                        </a>
                        <a href="{{ route('admin.dokumen.create') }}" class="mt-2 text-center bg-purple-600 hover:bg-purple-700 text-white text-xs font-bold py-2 px-4 rounded-xl transition-all">
                            + Unggah Dokumen Baru
                        </a>
                    </div>
                </div>

                <!-- Agenda -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 hover:shadow-xl transition-all duration-300 group">
                    <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center text-orange-600 mb-4 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h4 class="text-lg font-bold text-slate-800 mb-1">Agenda</h4>
                    <p class="text-sm text-slate-500 mb-4">Atur jadwal kegiatan dinas.</p>
                    <a href="{{ route('admin.agenda.index') }}" class="inline-flex items-center text-orange-600 font-semibold text-sm hover:text-orange-800">
                        Kelola Agenda &rarr;
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
