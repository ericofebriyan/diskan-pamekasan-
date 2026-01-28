<nav x-data="{ scrolled: false, mobileMenuOpen: false, activeDropdown: null }"
    @scroll.window="scrolled = (window.pageYOffset > 20)"
    :class="{ 'bg-white/80 backdrop-blur-lg shadow-xl border-b border-white/20': scrolled, 'bg-transparent border-b border-white/10': !scrolled }"
    class="fixed top-0 w-full z-50 transition-all duration-500 ease-in-out">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="flex justify-between items-center h-24">
            <!-- Logo Section -->
            <div class="flex-shrink-0 flex items-center gap-4 group cursor-pointer py-2 pl-2">
                <a href="{{ route('home') }}" class="flex items-center gap-4">
                    <div class="relative">
                        <div
                            class="absolute inset-0 bg-emerald-400/20 blur-xl rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        </div>
                        <img src="{{ asset('images/logo-pamekasan.png') }}" alt="Logo Pamekasan"
                            class="h-14 w-auto md:h-16 relative z-10 drop-shadow-lg transition-transform duration-500 group-hover:scale-110">
                    </div>
                    <div class="flex flex-col">
                        <span
                            class="font-outfit font-bold text-xl md:text-2xl text-slate-800 uppercase tracking-widest leading-none drop-shadow-sm group-hover:text-emerald-700 transition-colors"
                            :class="scrolled ? 'text-slate-800' : 'text-slate-800 text-shadow-sm'">
                            DINAS PERIKANAN
                        </span>
                        <span
                            class="font-outfit font-medium text-xs md:text-sm tracking-[0.3em] leading-none mt-1.5 uppercase transition-colors"
                            :class="scrolled ? 'text-emerald-700' : 'text-emerald-800'">
                            Kabupaten Pamekasan
                        </span>
                    </div>
                </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden lg:flex lg:items-center lg:space-x-1">
                @php
                    // Dynamic text color based on scroll state
                    $navLinkClass = "relative px-4 py-3 text-sm font-bold uppercase tracking-widest transition-all duration-300 group flex items-center gap-1 overflow-hidden rounded-lg hover:bg-white/10";
                    $textClass = "text-slate-700 group-hover:text-emerald-700";
                    $underlineClass = "absolute bottom-1 left-1/2 w-0 h-[3px] bg-gradient-to-r from-emerald-500 to-teal-500 transition-all duration-300 group-hover:w-1/2 group-hover:-translate-x-1/2 rounded-full";
                @endphp

                <a href="{{ route('home') }}" class="{{ $navLinkClass }} {{ $textClass }}">
                    Beranda
                    <span class="{{ $underlineClass }}"></span>
                </a>

                <!-- Profil Dropdown -->
                <div class="relative group" @mouseenter="activeDropdown = 'profil'" @mouseleave="activeDropdown = null">
                    <button class="{{ $navLinkClass }} {{ $textClass }}">
                        Profil
                        <svg class="w-4 h-4 transition-transform duration-300 group-hover:rotate-180" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                        <span class="{{ $underlineClass }}"></span>
                    </button>
                    <!-- Glass Dropdown -->
                    <div x-show="activeDropdown === 'profil'" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 translate-y-4 scale-95"
                        x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 translate-y-0 scale-100"
                        x-transition:leave-end="opacity-0 translate-y-4 scale-95"
                        class="absolute left-0 mt-2 w-72 bg-white/80 backdrop-blur-2xl rounded-2xl shadow-2xl ring-1 ring-black/5 overflow-hidden z-50 border border-white/40">
                        <div class="relative p-2">
                            <!-- Decorative blurred circle -->
                            <div
                                class="absolute -top-10 -right-10 w-24 h-24 bg-emerald-400/20 rounded-full blur-2xl pointer-events-none">
                            </div>

                            <a href="{{ route('profil.kepaladinas') }}"
                                class="group flex items-center px-4 py-3 text-sm text-slate-700 hover:bg-emerald-50/80 rounded-xl transition-all mb-1">
                                <span
                                    class="w-1 h-8 bg-emerald-500 rounded-full mr-3 transform scale-y-0 group-hover:scale-y-100 transition-transform"></span>
                                <div class="flex flex-col">
                                    <span class="font-bold group-hover:text-emerald-700 transition-colors">Kepala
                                        Dinas</span>
                                    <span class="text-xs text-slate-500">Profil Pimpinan</span>
                                </div>
                            </a>
                            <a href="{{ route('profil.sejarah') }}"
                                class="group flex items-center px-4 py-3 text-sm text-slate-700 hover:bg-emerald-50/80 rounded-xl transition-all mb-1">
                                <span
                                    class="w-1 h-8 bg-emerald-500 rounded-full mr-3 transform scale-y-0 group-hover:scale-y-100 transition-transform"></span>
                                <div class="flex flex-col">
                                    <span
                                        class="font-bold group-hover:text-emerald-700 transition-colors">Sejarah</span>
                                    <span class="text-xs text-slate-500">Perjalanan Instansi</span>
                                </div>
                            </a>
                            <a href="{{ route('profil.visimisi') }}"
                                class="group flex items-center px-4 py-3 text-sm text-slate-700 hover:bg-emerald-50/80 rounded-xl transition-all mb-1">
                                <span
                                    class="w-1 h-8 bg-emerald-500 rounded-full mr-3 transform scale-y-0 group-hover:scale-y-100 transition-transform"></span>
                                <div class="flex flex-col">
                                    <span class="font-bold group-hover:text-emerald-700 transition-colors">Visi
                                        Misi</span>
                                    <span class="text-xs text-slate-500">Tujuan & Cita-cita</span>
                                </div>
                            </a>
                            <a href="{{ route('profil.struktur') }}"
                                class="group flex items-center px-4 py-3 text-sm text-slate-700 hover:bg-emerald-50/80 rounded-xl transition-all mb-1">
                                <span
                                    class="w-1 h-8 bg-emerald-500 rounded-full mr-3 transform scale-y-0 group-hover:scale-y-100 transition-transform"></span>
                                <div class="flex flex-col">
                                    <span class="font-bold group-hover:text-emerald-700 transition-colors">Struktur
                                        Organisasi</span>
                                    <span class="text-xs text-slate-500">Bagan Susunan</span>
                                </div>
                            </a>
                            <a href="{{ route('profil.tupoksi') }}"
                                class="group flex items-center px-4 py-3 text-sm text-slate-700 hover:bg-emerald-50/80 rounded-xl transition-all">
                                <span
                                    class="w-1 h-8 bg-emerald-500 rounded-full mr-3 transform scale-y-0 group-hover:scale-y-100 transition-transform"></span>
                                <div class="flex flex-col">
                                    <span
                                        class="font-bold group-hover:text-emerald-700 transition-colors">Tupoksi</span>
                                    <span class="text-xs text-slate-500">Tugas & Fungsi</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Layanan Dropdown -->
                <div class="relative group" @mouseenter="activeDropdown = 'layanan'"
                    @mouseleave="activeDropdown = null">
                    <button class="{{ $navLinkClass }} {{ $textClass }}">
                        Layanan
                        <svg class="w-4 h-4 transition-transform duration-300 group-hover:rotate-180" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                        <span class="{{ $underlineClass }}"></span>
                    </button>
                    <div x-show="activeDropdown === 'layanan'" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 translate-y-4 scale-95"
                        x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 translate-y-0 scale-100"
                        x-transition:leave-end="opacity-0 translate-y-4 scale-95"
                        class="absolute left-0 mt-2 w-80 bg-white/80 backdrop-blur-2xl rounded-2xl shadow-2xl ring-1 ring-black/5 overflow-hidden z-50 border border-white/40">
                        <div class="relative p-2">
                            <div
                                class="absolute -bottom-10 -left-10 w-32 h-32 bg-blue-400/20 rounded-full blur-2xl pointer-events-none">
                            </div>

                            <a href="{{ route('layanan.index') }}"
                                class="block px-4 py-3 bg-emerald-50/50 rounded-xl text-sm font-bold text-emerald-800 hover:bg-emerald-100/80 transition-colors mb-2 text-center border border-emerald-100">
                                LIHAT SEMUA LAYANAN
                            </a>
                            <div class="h-px bg-gradient-to-r from-transparent via-slate-200 to-transparent my-2"></div>

                            <div class="grid grid-cols-1 gap-1">
                                <a href="{{ route('layanan.maklumat') }}"
                                    class="block px-4 py-2.5 text-sm text-slate-700 hover:bg-emerald-50/80 hover:text-emerald-700 hover:pl-6 transition-all rounded-lg font-medium">Maklumat
                                    Pelayanan</a>
                                <a href="{{ route('layanan.inovasi') }}"
                                    class="block px-4 py-2.5 text-sm text-slate-700 hover:bg-emerald-50/80 hover:text-emerald-700 hover:pl-6 transition-all rounded-lg font-medium">Inovasi
                                    Pelayanan</a>
                                <a href="{{ route('layanan.balaibenih') }}"
                                    class="block px-4 py-2.5 text-sm text-slate-700 hover:bg-emerald-50/80 hover:text-emerald-700 hover:pl-6 transition-all rounded-lg font-medium">Balai
                                    Benih Ikan</a>
                                <a href="{{ route('layanan.rekomendasibbm') }}"
                                    class="block px-4 py-2.5 text-sm text-slate-700 hover:bg-emerald-50/80 hover:text-emerald-700 hover:pl-6 transition-all rounded-lg font-medium">Rekomendasi
                                    BBM</a>
                                <a href="{{ route('layanan.pengaduan') }}"
                                    class="block px-4 py-2.5 text-sm text-slate-700 hover:bg-emerald-50/80 hover:text-emerald-700 hover:pl-6 transition-all rounded-lg font-medium">Pengaduan
                                    Online</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SAKIP Dropdown (Mega Layout) -->
                <div class="relative group" @mouseenter="activeDropdown = 'sakip'" @mouseleave="activeDropdown = null">
                    <button class="{{ $navLinkClass }} {{ $textClass }}">
                        SAKIP
                        <svg class="w-4 h-4 transition-transform duration-300 group-hover:rotate-180" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                        <span class="{{ $underlineClass }}"></span>
                    </button>
                    <div x-show="activeDropdown === 'sakip'" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 translate-y-4 scale-95"
                        x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 translate-y-0 scale-100"
                        x-transition:leave-end="opacity-0 translate-y-4 scale-95"
                        class="absolute left-1/2 -translate-x-1/2 mt-2 w-[600px] bg-white/90 backdrop-blur-2xl rounded-3xl shadow-2xl ring-1 ring-black/5 overflow-hidden z-50 border border-white/40">
                        <div class="relative p-6">
                            <!-- Background Pattern -->
                            <div class="absolute top-0 right-0 w-64 h-64 bg-emerald-500/5 rounded-full blur-3xl -z-10">
                            </div>

                            <div class="flex items-center justify-between mb-4 border-b border-slate-100 pb-2">
                                <h3 class="text-sm font-bold text-emerald-800 uppercase tracking-widest">Akuntabilitas
                                    Kinerja</h3>
                                <span class="text-xs text-slate-400">Transparansi Publik</span>
                            </div>

                            <div class="grid grid-cols-2 gap-x-8 gap-y-2">
                                <a href="{{ route('sakip.rka') }}"
                                    class="flex items-center gap-3 p-2 hover:bg-white rounded-xl hover:shadow-md transition-all group/item">
                                    <div
                                        class="w-8 h-8 rounded-lg bg-emerald-100 text-emerald-600 flex items-center justify-center group-hover/item:bg-emerald-600 group-hover/item:text-white transition-colors">
                                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                    </div>
                                    <span
                                        class="text-sm font-medium text-slate-600 group-hover/item:text-emerald-700">RKA</span>
                                </a>
                                <a href="{{ route('sakip.dpa') }}"
                                    class="flex items-center gap-3 p-2 hover:bg-white rounded-xl hover:shadow-md transition-all group/item">
                                    <div
                                        class="w-8 h-8 rounded-lg bg-blue-100 text-blue-600 flex items-center justify-center group-hover/item:bg-blue-600 group-hover/item:text-white transition-colors">
                                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                    </div>
                                    <span
                                        class="text-sm font-medium text-slate-600 group-hover/item:text-blue-700">DPA</span>
                                </a>
                                <a href="{{ route('sakip.renstra') }}"
                                    class="flex items-center gap-3 p-2 hover:bg-white rounded-xl hover:shadow-md transition-all group/item">
                                    <div
                                        class="w-8 h-8 rounded-lg bg-purple-100 text-purple-600 flex items-center justify-center group-hover/item:bg-purple-600 group-hover/item:text-white transition-colors">
                                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                                        </svg>
                                    </div>
                                    <span
                                        class="text-sm font-medium text-slate-600 group-hover/item:text-purple-700">Renstra</span>
                                </a>
                                <a href="{{ route('sakip.renja') }}"
                                    class="flex items-center gap-3 p-2 hover:bg-white rounded-xl hover:shadow-md transition-all group/item">
                                    <div
                                        class="w-8 h-8 rounded-lg bg-orange-100 text-orange-600 flex items-center justify-center group-hover/item:bg-orange-600 group-hover/item:text-white transition-colors">
                                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <span
                                        class="text-sm font-medium text-slate-600 group-hover/item:text-orange-700">Renja</span>
                                </a>
                                <a href="{{ route('sakip.ikuiki') }}"
                                    class="flex items-center gap-3 p-2 hover:bg-white rounded-xl hover:shadow-md transition-all group/item">
                                    <div
                                        class="w-8 h-8 rounded-lg bg-pink-100 text-pink-600 flex items-center justify-center group-hover/item:bg-pink-600 group-hover/item:text-white transition-colors">
                                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                        </svg>
                                    </div>
                                    <span class="text-sm font-medium text-slate-600 group-hover/item:text-pink-700">IKU
                                        & IKI</span>
                                </a>
                                <a href="{{ route('sakip.perjanjiankinerja') }}"
                                    class="flex items-center gap-3 p-2 hover:bg-white rounded-xl hover:shadow-md transition-all group/item">
                                    <div
                                        class="w-8 h-8 rounded-lg bg-cyan-100 text-cyan-600 flex items-center justify-center group-hover/item:bg-cyan-600 group-hover/item:text-white transition-colors">
                                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 4v16m8-8H4" />
                                        </svg>
                                    </div>
                                    <span class="text-sm font-medium text-slate-600 group-hover/item:text-cyan-700">PK
                                        (Perjanjian Kinerja)</span>
                                </a>
                                <a href="{{ route('sakip.renaksi') }}"
                                    class="flex items-center gap-3 p-2 hover:bg-white rounded-xl hover:shadow-md transition-all group/item">
                                    <div
                                        class="w-8 h-8 rounded-lg bg-teal-100 text-teal-600 flex items-center justify-center group-hover/item:bg-teal-600 group-hover/item:text-white transition-colors">
                                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                                        </svg>
                                    </div>
                                    <span
                                        class="text-sm font-medium text-slate-600 group-hover/item:text-teal-700">Renaksi</span>
                                </a>
                                <a href="{{ route('sakip.lkjip') }}"
                                    class="flex items-center gap-3 p-2 hover:bg-white rounded-xl hover:shadow-md transition-all group/item">
                                    <div
                                        class="w-8 h-8 rounded-lg bg-indigo-100 text-indigo-600 flex items-center justify-center group-hover/item:bg-indigo-600 group-hover/item:text-white transition-colors">
                                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                    </div>
                                    <span
                                        class="text-sm font-medium text-slate-600 group-hover/item:text-indigo-700">LKjIP</span>
                                </a>
                                <a href="{{ route('sakip.lra') }}"
                                    class="flex items-center gap-3 p-2 hover:bg-white rounded-xl hover:shadow-md transition-all group/item">
                                    <div
                                        class="w-8 h-8 rounded-lg bg-rose-100 text-rose-600 flex items-center justify-center group-hover/item:bg-rose-600 group-hover/item:text-white transition-colors">
                                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <span
                                        class="text-sm font-medium text-slate-600 group-hover/item:text-rose-700">LRA</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Informasi Dropdown -->
                <div class="relative group" @mouseenter="activeDropdown = 'informasi'"
                    @mouseleave="activeDropdown = null">
                    <button class="{{ $navLinkClass }} {{ $textClass }}">
                        Informasi
                        <svg class="w-4 h-4 transition-transform duration-300 group-hover:rotate-180" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                        <span class="{{ $underlineClass }}"></span>
                    </button>
                    <div x-show="activeDropdown === 'informasi'" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 translate-y-4 scale-95"
                        x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 translate-y-0 scale-100"
                        x-transition:leave-end="opacity-0 translate-y-4 scale-95"
                        class="absolute left-0 mt-2 w-72 bg-white/80 backdrop-blur-2xl rounded-2xl shadow-2xl ring-1 ring-black/5 overflow-hidden z-50 border border-white/40">
                        <div class="py-2">
                            <a href="{{ route('berita.index') }}"
                                class="block px-6 py-3 text-sm text-slate-700 hover:bg-emerald-50/50 hover:text-emerald-700 transition-colors font-medium border-l-4 border-transparent hover:border-emerald-500">Berita
                                Terkini</a>
                            <a href="{{ route('informasi.permohonan') }}"
                                class="block px-6 py-3 text-sm text-slate-700 hover:bg-emerald-50/50 hover:text-emerald-700 transition-colors font-medium border-l-4 border-transparent hover:border-emerald-500">Permohonan
                                Informasi</a>
                            <a href="{{ route('informasi.daftar-publik') }}"
                                class="block px-6 py-3 text-sm text-slate-700 hover:bg-emerald-50/50 hover:text-emerald-700 transition-colors font-medium border-l-4 border-transparent hover:border-emerald-500">Daftar
                                Informasi Publik</a>
                            <div class="h-px bg-slate-200 mx-6 my-1"></div>
                            <a href="{{ route('agenda.index') }}"
                                class="block px-6 py-3 text-sm text-slate-700 hover:bg-emerald-50/50 hover:text-emerald-700 transition-colors font-medium border-l-4 border-transparent hover:border-emerald-500">Agenda
                                Kegiatan</a>
                            <a href="{{ route('galeri.index') }}"
                                class="block px-6 py-3 text-sm text-slate-700 hover:bg-emerald-50/50 hover:text-emerald-700 transition-colors font-medium border-l-4 border-transparent hover:border-emerald-500">Galeri
                                Foto</a>
                            <a href="{{ route('dokumen.index') }}"
                                class="block px-6 py-3 text-sm text-slate-700 hover:bg-emerald-50/50 hover:text-emerald-700 transition-colors font-medium border-l-4 border-transparent hover:border-emerald-500">Dokumen
                                Publik</a>
                        </div>
                    </div>
                </div>

                <!-- Kontak Link -->
                <a href="{{ route('kontak') }}" class="{{ $navLinkClass }} {{ $textClass }}">
                    Kontak
                    <span class="{{ $underlineClass }}"></span>
                </a>

                <!-- PPID Action Button (Gradient) -->
                <div class="ml-6">
                    <a href="{{ route('ppid') }}" target="_blank"
                        class="px-6 py-2 bg-gradient-to-r from-emerald-600 to-teal-700 text-white text-sm font-bold uppercase tracking-widest rounded-full shadow-lg hover:shadow-emerald-500/50 transition-all duration-300 transform hover:-translate-y-1 hover:scale-105 flex items-center gap-2 border border-white/20 group-hover:from-emerald-500 group-hover:to-teal-600 ring-2 ring-emerald-500/30">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        PPID
                    </a>
                </div>
            </div>

            <!-- Mobile menu button -->
            <div class="-mr-2 flex lg:hidden">
                <button type="button" @click="mobileMenuOpen = !mobileMenuOpen"
                    class="p-2 rounded-xl inline-flex items-center justify-center transition-all duration-300 backdrop-blur-md border border-white/20 shadow-lg"
                    :class="scrolled ? 'bg-emerald-900/10 text-emerald-800' : 'bg-white/10 text-white'">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-8 w-8" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': mobileMenuOpen, 'inline-flex': !mobileMenuOpen }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': !mobileMenuOpen, 'inline-flex': mobileMenuOpen }" class="hidden"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 -translate-y-10" x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-10"
        class="lg:hidden bg-white/95 backdrop-blur-3xl border-t border-emerald-100 absolute top-24 w-full h-[calc(100vh-6rem)] overflow-y-auto z-40 pb-20 shadow-inner">

        <div class="px-4 pt-6 space-y-2">

            <a href="{{ route('home') }}"
                class="block px-6 py-4 rounded-2xl text-lg font-bold text-slate-800 hover:bg-emerald-50 transition-all border-l-4 border-transparent hover:border-emerald-500 shadow-sm">BERANDA</a>

            <!-- Mobile Profil -->
            <div x-data="{ open: false }" class="rounded-2xl overflow-hidden bg-slate-50 border border-slate-100">
                <button @click="open = !open"
                    class="w-full flex justify-between items-center px-6 py-4 text-base font-bold text-slate-800 transition-all hover:bg-emerald-50">
                    <span>PROFIL</span>
                    <svg class="h-5 w-5 transition-transform duration-300 text-emerald-600"
                        :class="{ 'rotate-180': open }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="open" x-collapse class="bg-white border-t border-slate-100 p-2 space-y-1">
                    <a href="{{ route('profil.kepaladinas') }}"
                        class="block px-4 py-3 rounded-xl text-sm font-medium text-slate-600 hover:text-emerald-700 hover:bg-emerald-50">Kepala
                        Dinas</a>
                    <a href="{{ route('profil.sejarah') }}"
                        class="block px-4 py-3 rounded-xl text-sm font-medium text-slate-600 hover:text-emerald-700 hover:bg-emerald-50">Sejarah</a>
                    <a href="{{ route('profil.visimisi') }}"
                        class="block px-4 py-3 rounded-xl text-sm font-medium text-slate-600 hover:text-emerald-700 hover:bg-emerald-50">Visi
                        Misi</a>
                </div>
            </div>

            <!-- Mobile Layanan -->
            <div x-data="{ open: false }" class="rounded-2xl overflow-hidden bg-slate-50 border border-slate-100">
                <button @click="open = !open"
                    class="w-full flex justify-between items-center px-6 py-4 text-base font-bold text-slate-800 transition-all hover:bg-emerald-50">
                    <span>LAYANAN</span>
                    <svg class="h-5 w-5 transition-transform duration-300 text-emerald-600"
                        :class="{ 'rotate-180': open }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="open" x-collapse class="bg-white border-t border-slate-100 p-2 space-y-1">
                    <a href="{{ route('layanan.index') }}"
                        class="block px-4 py-3 rounded-xl text-sm font-bold text-emerald-700 bg-emerald-50/50">Semua
                        Layanan</a>
                    <a href="{{ route('layanan.maklumat') }}"
                        class="block px-4 py-3 rounded-xl text-sm font-medium text-slate-600 hover:text-emerald-700 hover:bg-emerald-50">Maklumat
                        Pelayanan</a>
                    <a href="{{ route('layanan.pengaduan') }}"
                        class="block px-4 py-3 rounded-xl text-sm font-medium text-slate-600 hover:text-emerald-700 hover:bg-emerald-50">Pengaduan
                        Online</a>
                </div>
            </div>

            <!-- Mobile SAKIP -->
            <div x-data="{ open: true }" class="rounded-2xl overflow-hidden bg-slate-50 border border-slate-100">
                <button @click="open = !open"
                    class="w-full flex justify-between items-center px-6 py-4 text-base font-bold text-slate-800 transition-all hover:bg-emerald-50">
                    <span>SAKIP</span>
                    <svg class="h-5 w-5 transition-transform duration-300 text-emerald-600"
                        :class="{ 'rotate-180': open }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="open" x-collapse class="bg-white border-t border-slate-100 p-2 grid grid-cols-2 gap-2">
                    <a href="{{ route('sakip.rka') }}"
                        class="block px-3 py-2 rounded-lg text-xs font-medium text-slate-600 bg-slate-50 border border-slate-100 text-center">RKA</a>
                    <a href="{{ route('sakip.dpa') }}"
                        class="block px-3 py-2 rounded-lg text-xs font-medium text-slate-600 bg-slate-50 border border-slate-100 text-center">DPA</a>
                    <a href="{{ route('sakip.renstra') }}"
                        class="block px-3 py-2 rounded-lg text-xs font-medium text-slate-600 bg-slate-50 border border-slate-100 text-center">Renstra</a>
                    <a href="{{ route('sakip.renja') }}"
                        class="block px-3 py-2 rounded-lg text-xs font-medium text-slate-600 bg-slate-50 border border-slate-100 text-center">Renja</a>
                    <a href="{{ route('sakip.ikuiki') }}"
                        class="block px-3 py-2 rounded-lg text-xs font-medium text-slate-600 bg-slate-50 border border-slate-100 text-center">IKU/IKI</a>
                    <a href="{{ route('sakip.perjanjiankinerja') }}"
                        class="block px-3 py-2 rounded-lg text-xs font-medium text-slate-600 bg-slate-50 border border-slate-100 text-center">PK</a>
                    <a href="{{ route('sakip.renaksi') }}"
                        class="block px-3 py-2 rounded-lg text-xs font-medium text-slate-600 bg-slate-50 border border-slate-100 text-center">Renaksi</a>
                    <a href="{{ route('sakip.lkjip') }}"
                        class="block px-3 py-2 rounded-lg text-xs font-medium text-slate-600 bg-slate-50 border border-slate-100 text-center">LKjIP</a>
                </div>
            </div>

            <a href="{{ route('kontak') }}"
                class="block px-6 py-4 rounded-2xl text-lg font-bold text-slate-800 hover:bg-emerald-50 transition-all border-l-4 border-transparent hover:border-emerald-500 shadow-sm">KONTAK</a>

            <div class="pt-6 px-2">
                <a href="{{ route('ppid') }}" target="_blank"
                    class="block w-full text-center px-6 py-4 bg-gradient-to-r from-emerald-600 to-teal-600 text-white text-lg font-bold uppercase tracking-widest rounded-2xl shadow-xl transition-all active:scale-95">
                    Buka Portal PPID
                </a>
            </div>

            <div class="h-20"></div> <!-- Spacer -->
        </div>
    </div>
</nav>