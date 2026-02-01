@extends('layouts.app')

@section('title', 'Daftar Informasi Publik - Dinas Perikanan Pamekasan')

@section('content')
<div class="relative bg-emerald-900 pt-24 pb-32 overflow-hidden">
    <!-- Background Patterns -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 right-0 w-96 h-96 bg-white rounded-full blur-3xl transform translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 left-0 w-64 h-64 bg-emerald-400 rounded-full blur-3xl transform -translate-x-1/2 translate-y-1/2"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center" x-data="{ show: false }" x-init="setTimeout(() => show = true, 100)">
            <h1 x-show="show" x-transition:enter="transition ease-out duration-700"
                x-transition:enter-start="opacity-0 transform -translate-y-8"
                x-transition:enter-end="opacity-100 transform translate-y-0"
                class="text-4xl md:text-5xl font-extrabold text-white mb-4 tracking-tight uppercase">
                Daftar <span class="text-emerald-400">Informasi Publik</span>
            </h1>
            <p x-show="show" x-transition:enter="transition ease-out duration-700 delay-300"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                class="text-emerald-100 text-lg md:text-xl max-w-2xl mx-auto font-medium leading-relaxed">
                Akses informasi publik yang transparan dan akuntabel sesuai amanat undang-undang.
            </p>
        </div>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-16 relative z-20 pb-20">
    <div class="grid lg:grid-cols-2 gap-8">
        <!-- Informasi Wajib Berkala -->
        <div class="bg-white rounded-3xl shadow-xl border border-emerald-100 overflow-hidden flex flex-col">
            <div class="bg-emerald-600 px-8 py-6 flex items-center gap-4">
                <div class="w-12 h-12 bg-white/20 rounded-2xl flex items-center justify-center text-white backdrop-blur-sm">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div>
                    <h2 class="text-xl font-bold text-white m-0">Informasi Wajib Berkala</h2>
                    <p class="text-emerald-100 text-xs m-0">Informasi yang wajib disediakan secara berkala</p>
                </div>
            </div>
            <div class="p-8 flex-grow">
                <ul class="space-y-4">
                    <li>
                        <a href="{{ route('sakip.renstra') }}" class="group flex items-center justify-between p-4 bg-slate-50 rounded-2xl hover:bg-emerald-50 transition-all border border-slate-100 hover:border-emerald-200">
                            <span class="text-gray-700 font-medium group-hover:text-emerald-700">Rencana Strategis (Renstra)</span>
                            <svg class="w-5 h-5 text-emerald-500 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('sakip.renja') }}" class="group flex items-center justify-between p-4 bg-slate-50 rounded-2xl hover:bg-emerald-50 transition-all border border-slate-100 hover:border-emerald-200">
                            <span class="text-gray-700 font-medium group-hover:text-emerald-700">Rencana Kerja (Renja)</span>
                            <svg class="w-5 h-5 text-emerald-500 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('sakip.lkjip') }}" class="group flex items-center justify-between p-4 bg-slate-50 rounded-2xl hover:bg-emerald-50 transition-all border border-slate-100 hover:border-emerald-200">
                            <span class="text-gray-700 font-medium group-hover:text-emerald-700">LKjIP Dinas Perikanan</span>
                            <svg class="w-5 h-5 text-emerald-500 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('sakip.rka') }}" class="group flex items-center justify-between p-4 bg-slate-50 rounded-2xl hover:bg-emerald-50 transition-all border border-slate-100 hover:border-emerald-200">
                            <span class="text-gray-700 font-medium group-hover:text-emerald-700">Rencana Kerja dan Anggaran (RKA)</span>
                            <svg class="w-5 h-5 text-emerald-500 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('sakip.dpa') }}" class="group flex items-center justify-between p-4 bg-slate-50 rounded-2xl hover:bg-emerald-50 transition-all border border-slate-100 hover:border-emerald-200">
                            <span class="text-gray-700 font-medium group-hover:text-emerald-700">Dokumen Pelaksanaan Anggaran (DPA)</span>
                            <svg class="w-5 h-5 text-emerald-500 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('sakip.lra') }}" class="group flex items-center justify-between p-4 bg-slate-50 rounded-2xl hover:bg-emerald-50 transition-all border border-slate-100 hover:border-emerald-200">
                            <span class="text-gray-700 font-medium group-hover:text-emerald-700">Laporan Realisasi Anggaran (LRA)</span>
                            <svg class="w-5 h-5 text-emerald-500 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://sirup.lkpp.go.id" target="_blank" class="group flex items-center justify-between p-4 bg-slate-50 rounded-2xl hover:bg-emerald-50 transition-all border border-slate-100 hover:border-emerald-200">
                            <div class="flex items-center gap-2">
                                <span class="text-gray-700 font-medium group-hover:text-emerald-700">Sistem Informasi Umum Pengadaan (SIRUP)</span>
                                <svg class="w-4 h-4 text-gray-400 group-hover:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            </div>
                            <svg class="w-5 h-5 text-emerald-500 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </li>
                    <li>
                        <div class="p-4 bg-slate-50 rounded-2xl border border-slate-100">
                            <span class="text-gray-700 font-medium">Informasi Peraturan, Keputusan, dan Kebijakan Publik</span>
                        </div>
                    </li>
                    <li>
                        <a href="https://www.jotform.com/app/e-ppid/pamekasan/page/11" target="_blank" class="group flex items-center justify-between p-4 bg-emerald-600 rounded-2xl hover:bg-emerald-700 transition-all shadow-lg shadow-emerald-200 text-white">
                            <div class="flex items-center gap-2">
                                <span class="font-bold">Permohonan Informasi Publik (E-PPID)</span>
                                <svg class="w-4 h-4 text-emerald-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            </div>
                            <svg class="w-5 h-5 text-white transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Informasi Setiap Saat -->
        <div class="bg-white rounded-3xl shadow-xl border border-blue-100 overflow-hidden flex flex-col">
            <div class="bg-blue-600 px-8 py-6 flex items-center gap-4">
                <div class="w-12 h-12 bg-white/20 rounded-2xl flex items-center justify-center text-white backdrop-blur-sm">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div>
                    <h2 class="text-xl font-bold text-white m-0">Informasi Setiap Saat</h2>
                    <p class="text-blue-100 text-xs m-0">Informasi yang tersedia setiap saat untuk publik</p>
                </div>
            </div>
            <div class="p-8 flex-grow">
                <ul class="space-y-4">
                    <li>
                        <a href="{{ route('berita.index') }}" class="group flex items-center justify-between p-4 bg-slate-50 rounded-2xl hover:bg-blue-50 transition-all border border-slate-100 hover:border-blue-200">
                            <span class="text-gray-700 font-medium group-hover:text-blue-700">Informasi Kegiatan Dinas Perikanan</span>
                            <svg class="w-5 h-5 text-blue-500 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('layanan.rekomendasibbm') }}" class="group flex items-center justify-between p-4 bg-slate-50 rounded-2xl hover:bg-blue-50 transition-all border border-slate-100 hover:border-blue-200">
                            <span class="text-gray-700 font-medium group-hover:text-blue-700">Persyaratan Perizinan & Layanan</span>
                            <svg class="w-5 h-5 text-blue-500 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://docs.google.com/spreadsheets/d/1GpgG-W5T_oFLZwmajqz63wn7GWgc1ol1/edit?gid=1832534952#gid=1832534952" target="_blank" class="group flex items-center justify-between p-4 bg-slate-50 rounded-2xl hover:bg-blue-50 transition-all border border-slate-100 hover:border-blue-200">
                            <div class="flex items-center gap-2">
                                <span class="text-gray-700 font-medium group-hover:text-blue-700">Daftar Aset dan Inventaris</span>
                                <svg class="w-4 h-4 text-gray-400 group-hover:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            </div>
                            <svg class="w-5 h-5 text-blue-500 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('berita.index') }}" class="group flex items-center justify-between p-4 bg-slate-50 rounded-2xl hover:bg-blue-50 transition-all border border-slate-100 hover:border-blue-200">
                            <span class="text-gray-700 font-medium group-hover:text-blue-700">Agenda Kerja Pimpinan</span>
                            <svg class="w-5 h-5 text-blue-500 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </li>
                    <li>
                        <div class="p-4 bg-slate-50 rounded-2xl border border-slate-100">
                            <span class="text-gray-700 font-medium">Komunikasi Pimpinan</span>
                        </div>
                    </li>
                    <li>
                        <a href="{{ route('sakip.perjanjiankinerja') }}" class="group flex items-center justify-between p-4 bg-slate-50 rounded-2xl hover:bg-blue-50 transition-all border border-slate-100 hover:border-blue-200">
                            <span class="text-gray-700 font-medium group-hover:text-blue-700">Perjanjian Kerja (PK)</span>
                            <svg class="w-5 h-5 text-blue-500 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Informasi Serta Merta -->
        <div class="bg-white rounded-3xl shadow-xl border border-emerald-100 overflow-hidden flex flex-col">
            <div style="background-color: #047857;" class="px-8 py-6 flex items-center gap-4">
                <div style="background-color: rgba(255, 255, 255, 0.2); backdrop-filter: blur(4px);" class="w-12 h-12 rounded-2xl flex items-center justify-center text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                    </svg>
                </div>
                <div>
                    <h2 class="text-xl font-bold text-white m-0">Informasi Serta Merta</h2>
                    <p style="color: #ecfdf5;" class="text-xs m-0">Informasi mendesak dan mendadak bagi publik</p>
                </div>
            </div>
            <div class="p-8 flex-grow">
                <ul class="space-y-4">
                    <li>
                        <a href="https://drive.google.com/file/d/1fAmnHgm7L8YMbE4FS0-TohOfaIJq3_zC/view" target="_blank" class="group flex items-center justify-between p-4 bg-slate-50 rounded-2xl hover:bg-emerald-50 transition-all border border-slate-100 hover:border-emerald-200">
                            <span class="text-gray-700 font-medium group-hover:text-emerald-700">Prosedur Evakuasi Bencana</span>
                            <svg class="w-5 h-5 text-emerald-500 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('berita.index') }}" class="group flex items-center justify-between p-4 bg-slate-50 rounded-2xl hover:bg-emerald-50 transition-all border border-slate-100 hover:border-emerald-200">
                            <span class="text-gray-700 font-medium group-hover:text-emerald-700">Informasi Kegiatan Dinas Perikanan</span>
                            <svg class="w-5 h-5 text-emerald-500 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </li>
                    <li class="pt-2">
                        <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-3 ml-2">Media Sosial Resmi</p>
                        <div class="grid grid-cols-2 gap-3">
                            <a href="https://web.facebook.com/DisKanPamekasan/" target="_blank" class="flex items-center gap-3 p-3 bg-slate-50 rounded-xl hover:bg-blue-50 transition-all border border-slate-100 hover:border-blue-200 group/socmed">
                                <svg class="w-5 h-5 text-blue-600 group-hover/socmed:scale-110 transition-transform" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c5.05-.5 9-4.76 9-9.95z"></path></svg>
                                <span class="text-xs font-bold text-slate-600 group-hover/socmed:text-blue-700">Facebook</span>
                            </a>
                            <a href="https://www.instagram.com/perikanan_pamekasan/" target="_blank" class="flex items-center gap-3 p-3 bg-slate-50 rounded-xl hover:bg-pink-50 transition-all border border-slate-100 hover:border-pink-200 group/socmed">
                                <svg class="w-5 h-5 text-pink-600 group-hover/socmed:scale-110 transition-transform" fill="currentColor" viewBox="0 0 24 24"><path d="M7.75 2h8.5C19.42 2 22 4.58 22 7.75v8.5c0 3.17-2.58 5.75-5.75 5.75h-8.5C4.58 22 2 19.42 2 16.25v-8.5C2 4.58 4.58 2 7.75 2zm0 1.5c-2.35 0-4.25 1.9-4.25 4.25v8.5c0 2.35 1.9 4.25 4.25 4.25h8.5c2.35 0 4.25-1.9 4.25-4.25v-8.5c0-2.35-1.9-4.25-4.25-4.25h-8.5zM12 7a5 5 0 110 10 5 5 0 010-10zm0 1.5a3.5 3.5 0 100 7 3.5 3.5 0 000-7zm5.25-.25a1 1 0 110 2 1 1 0 010-2z"></path></svg>
                                <span class="text-xs font-bold text-slate-600 group-hover/socmed:text-pink-700">Instagram</span>
                            </a>
                            <a href="https://www.youtube.com/@Diskanpmk" target="_blank" class="flex items-center gap-3 p-3 bg-slate-50 rounded-xl hover:bg-red-50 transition-all border border-slate-100 hover:border-red-200 group/socmed">
                                <svg class="w-5 h-5 text-red-600 group-hover/socmed:scale-110 transition-transform" fill="currentColor" viewBox="0 0 24 24"><path d="M21.58 7.19a3.02 3.02 0 00-2.12-2.13C17.59 4.5 12 4.5 12 4.5s-5.59 0-7.46.56a3.02 3.02 0 00-2.12 2.13C2 9.06 2 12 2 12s0 2.94.42 4.81a3.02 3.02 0 002.12 2.13c1.87.56 7.46.56 7.46.56s5.59 0 7.46-.56a3.02 3.02 0 002.12-2.13C22 14.94 22 12 22 12s0-2.94-.42-4.81zM9.75 15.5V8.5l5.5 3.5-5.5 3.5z"></path></svg>
                                <span class="text-xs font-bold text-slate-600 group-hover/socmed:text-red-700">YouTube</span>
                            </a>
                            <a href="https://www.tiktok.com/@diskanpmk" target="_blank" class="flex items-center gap-3 p-3 bg-slate-50 rounded-xl hover:bg-slate-900 transition-all border border-slate-100 hover:border-slate-800 group/socmed">
                                <svg class="w-4 h-4 text-slate-600 group-hover/socmed:text-white group-hover/socmed:scale-110 transition-all" fill="currentColor" viewBox="0 0 448 512"><path d="M448 209.91a210.06 210.06 0 0 1-122.77-39.25V349.38A162.55 162.55 0 1 1 185 188.31V278.2a74.62 74.62 0 1 0 52.23 71.18V0l88 0a121.18 121.18 0 0 0 1.86 22.17h0A122.18 122.18 0 0 0 381 102.39a121.43 121.43 0 0 0 67 20.14z"/></svg>
                                <span class="text-xs font-bold text-slate-600 group-hover/socmed:text-white transition-colors">TikTok</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Informasi Dikecualikan -->
        <div class="bg-white rounded-3xl shadow-xl border border-gray-200 overflow-hidden flex flex-col">
            <div style="background-color: #0f172a;" class="px-8 py-6 flex items-center gap-4">
                <div style="background-color: rgba(255, 255, 255, 0.2); backdrop-filter: blur(4px);" class="w-12 h-12 rounded-2xl flex items-center justify-center text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                    </svg>
                </div>
                <div>
                    <h2 class="text-xl font-bold text-white m-0">Informasi Dikecualikan</h2>
                    <p style="color: #94a3b8;" class="text-xs m-0">Klasifikasi informasi yang tidak dapat diakses publik</p>
                </div>
            </div>
            <div class="p-8 flex-grow">
                <ul class="space-y-4">
                    <li>
                        <a href="https://drive.google.com/file/d/1eW67i-YiY8WFFGKxALGA9f8pMsk4XeLT/view" target="_blank" class="group flex items-center justify-between p-4 bg-slate-50 rounded-2xl hover:bg-slate-100 transition-all border border-slate-100 hover:border-slate-300">
                            <span class="text-gray-700 font-medium group-hover:text-slate-900">Klasifikasi Informasi yang Dikecualikan</span>
                            <svg class="w-5 h-5 text-slate-500 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </li>
                </ul>
                <div class="mt-8 p-6 bg-slate-50 rounded-3xl border border-slate-200 border-dashed">
                    <div class="flex gap-4">
                        <div class="w-10 h-10 bg-slate-200/50 rounded-xl flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <p class="text-sm text-slate-600 leading-relaxed italic m-0">
                            Informasi yang dikecualikan adalah informasi yang tidak dapat diakses oleh pemohon informasi publik sebagaimana diatur dalam Undang-Undang Nomor 14 Tahun 2008.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
