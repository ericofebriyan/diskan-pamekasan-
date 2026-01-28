<nav x-data="{ scrolled: false, mobileMenuOpen: false, activeDropdown: null }"
    @scroll.window="scrolled = (window.pageYOffset > 20)"
    :class="{ 'bg-emerald-800/90 backdrop-blur-md shadow-lg': scrolled, 'bg-emerald-800/80 backdrop-blur-sm': !scrolled }"
    class="fixed top-0 w-full z-50 transition-all duration-300 border-b border-white/10">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="flex justify-between items-center h-24">
            <!-- Logo Section with localized whitespace -->
            <div class="flex-shrink-0 flex items-center gap-4 group cursor-pointer py-2 pl-2">
                <a href="{{ route('home') }}" class="flex items-center gap-4">
                    <div class="relative">
                        <div
                            class="absolute inset-0 bg-white/20 blur-xl rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        </div>
                        <img src="{{ asset('images/logo-pamekasan.png') }}" alt="Logo Pamekasan"
                            class="h-14 w-auto md:h-16 relative z-10 drop-shadow-md transition-transform duration-300 group-hover:scale-105">
                    </div>
                    <div class="flex flex-col">
                        <span
                            class="font-outfit font-bold text-xl md:text-2xl text-white uppercase tracking-wider leading-none drop-shadow-sm">
                            DINAS PERIKANAN
                        </span>
                        <span
                            class="font-outfit font-medium text-xs md:text-sm text-emerald-100 tracking-[0.2em] leading-none mt-1.5 uppercase">
                            Kabupaten Pamekasan
                        </span>
                    </div>
                </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex md:items-center md:space-x-2">
                <!-- Helper for active link underline -->
                @php
                    $navLinkClass = "relative px-4 py-2 text-sm font-bold uppercase tracking-wide text-white/90 hover:text-white transition-colors duration-300 group";
                    $underlineClass = "absolute bottom-1 left-1/2 w-0 h-[2px] bg-emerald-300 transition-all duration-300 group-hover:w-3/4 group-hover:-translate-x-1/2";
                @endphp

                <a href="{{ route('home') }}" class="{{ $navLinkClass }}">
                    Beranda
                    <span class="{{ $underlineClass }}"></span>
                </a>

                <!-- Profil Dropdown -->
                <div class="relative group" @mouseenter="activeDropdown = 'profil'" @mouseleave="activeDropdown = null">
                    <button class="{{ $navLinkClass }} inline-flex items-center gap-1">
                        Profil
                        <svg class="w-4 h-4 transition-transform duration-300 group-hover:rotate-180" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                        <span class="{{ $underlineClass }}"></span>
                    </button>
                    <!-- Modern Glass Dropdown -->
                    <div x-show="activeDropdown === 'profil'" x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 translate-y-4"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-4"
                        class="absolute left-0 mt-6 w-64 bg-white/95 backdrop-blur-2xl rounded-2xl shadow-2xl ring-1 ring-black/5 overflow-hidden z-50 transform origin-top-left border border-white/50">
                        <div class="py-2">
                            <a href="{{ route('profil.kepaladinas') }}"
                                class="block px-6 py-3 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors font-medium border-l-4 border-transparent hover:border-emerald-500">Kepala
                                Dinas</a>
                            <a href="{{ route('profil.sejarah') }}"
                                class="block px-6 py-3 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors font-medium border-l-4 border-transparent hover:border-emerald-500">Sejarah</a>
                            <a href="{{ route('profil.visimisi') }}"
                                class="block px-6 py-3 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors font-medium border-l-4 border-transparent hover:border-emerald-500">Visi
                                Misi</a>
                            <a href="{{ route('profil.struktur') }}"
                                class="block px-6 py-3 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors font-medium border-l-4 border-transparent hover:border-emerald-500">Struktur
                                Organisasi</a>
                            <a href="{{ route('profil.tupoksi') }}"
                                class="block px-6 py-3 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors font-medium border-l-4 border-transparent hover:border-emerald-500">Tupoksi</a>
                        </div>
                    </div>
                </div>

                <!-- Layanan Dropdown -->
                <div class="relative group" @mouseenter="activeDropdown = 'layanan'"
                    @mouseleave="activeDropdown = null">
                    <button class="{{ $navLinkClass }} inline-flex items-center gap-1">
                        Layanan
                        <svg class="w-4 h-4 transition-transform duration-300 group-hover:rotate-180" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                        <span class="{{ $underlineClass }}"></span>
                    </button>
                    <div x-show="activeDropdown === 'layanan'" x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 translate-y-4"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-4"
                        class="absolute left-0 mt-6 w-72 bg-white/95 backdrop-blur-2xl rounded-2xl shadow-2xl ring-1 ring-black/5 overflow-hidden z-50 transform origin-top-left border border-white/50">
                        <div class="py-2">
                            <a href="{{ route('layanan.index') }}"
                                class="block px-6 py-3 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors font-bold border-l-4 border-transparent hover:border-emerald-500">Semua
                                Layanan</a>
                            <div class="h-px bg-slate-100 mx-6 my-1"></div>
                            <a href="{{ route('layanan.maklumat') }}"
                                class="block px-6 py-3 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors font-medium border-l-4 border-transparent hover:border-emerald-500">Maklumat
                                Pelayanan</a>
                            <a href="{{ route('layanan.inovasi') }}"
                                class="block px-6 py-3 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors font-medium border-l-4 border-transparent hover:border-emerald-500">Inovasi
                                Pelayanan</a>
                            <a href="{{ route('layanan.balaibenih') }}"
                                class="block px-6 py-3 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors font-medium border-l-4 border-transparent hover:border-emerald-500">Balai
                                Benih Ikan</a>
                            <a href="{{ route('layanan.rekomendasibbm') }}"
                                class="block px-6 py-3 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors font-medium border-l-4 border-transparent hover:border-emerald-500">Rekomendasi
                                BBM</a>
                            <a href="{{ route('layanan.pengaduan') }}"
                                class="block px-6 py-3 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors font-medium border-l-4 border-transparent hover:border-emerald-500">Pengaduan
                                Online</a>
                        </div>
                    </div>
                </div>

                <!-- SAKIP Dropdown (Complete Menu) -->
                <div class="relative group" @mouseenter="activeDropdown = 'sakip'" @mouseleave="activeDropdown = null">
                    <button class="{{ $navLinkClass }} inline-flex items-center gap-1">
                        SAKIP
                        <svg class="w-4 h-4 transition-transform duration-300 group-hover:rotate-180" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                        <span class="{{ $underlineClass }}"></span>
                    </button>
                    <div x-show="activeDropdown === 'sakip'" x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 translate-y-4"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-4"
                        class="absolute left-0 mt-6 w-64 bg-white/95 backdrop-blur-2xl rounded-2xl shadow-2xl ring-1 ring-black/5 overflow-hidden z-50 transform origin-top-left border border-white/50">
                        <div class="py-2 max-h-[80vh] overflow-y-auto custom-scrollbar">
                            <a href="{{ route('sakip.rka') }}"
                                class="block px-6 py-3 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors font-medium border-l-4 border-transparent hover:border-emerald-500">RKA</a>
                            <a href="{{ route('sakip.dpa') }}"
                                class="block px-6 py-3 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors font-medium border-l-4 border-transparent hover:border-emerald-500">DPA</a>
                            <a href="{{ route('sakip.renstra') }}"
                                class="block px-6 py-3 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors font-medium border-l-4 border-transparent hover:border-emerald-500">Renstra</a>
                            <a href="{{ route('sakip.renja') }}"
                                class="block px-6 py-3 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors font-medium border-l-4 border-transparent hover:border-emerald-500">Renja</a>
                            <a href="{{ route('sakip.ikuiki') }}"
                                class="block px-6 py-3 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors font-medium border-l-4 border-transparent hover:border-emerald-500">IKU
                                & IKI</a>
                            <a href="{{ route('sakip.perjanjiankinerja') }}"
                                class="block px-6 py-3 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors font-medium border-l-4 border-transparent hover:border-emerald-500">Perjanjian
                                Kinerja</a>
                            <a href="{{ route('sakip.renaksi') }}"
                                class="block px-6 py-3 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors font-medium border-l-4 border-transparent hover:border-emerald-500">Renaksi</a>
                            <a href="{{ route('sakip.lkjip') }}"
                                class="block px-6 py-3 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors font-medium border-l-4 border-transparent hover:border-emerald-500">LKjIP</a>
                            <a href="{{ route('sakip.lra') }}"
                                class="block px-6 py-3 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors font-medium border-l-4 border-transparent hover:border-emerald-500">LRA</a>
                        </div>
                    </div>
                </div>

                <!-- Informasi Dropdown (Refined) -->
                <div class="relative group" @mouseenter="activeDropdown = 'informasi'"
                    @mouseleave="activeDropdown = null">
                    <button class="{{ $navLinkClass }} inline-flex items-center gap-1">
                        Informasi
                        <svg class="w-4 h-4 transition-transform duration-300 group-hover:rotate-180" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                        <span class="{{ $underlineClass }}"></span>
                    </button>
                    <div x-show="activeDropdown === 'informasi'" x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 translate-y-4"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-4"
                        class="absolute left-0 mt-6 w-72 bg-white/95 backdrop-blur-2xl rounded-2xl shadow-2xl ring-1 ring-black/5 overflow-hidden z-50 transform origin-top-left border border-white/50">
                        <div class="py-2">
                            <a href="{{ route('berita.index') }}"
                                class="block px-6 py-3 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors font-medium border-l-4 border-transparent hover:border-emerald-500">Berita
                                Terkini</a>
                            <a href="{{ route('informasi.permohonan') }}"
                                class="block px-6 py-3 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors font-medium border-l-4 border-transparent hover:border-emerald-500">Permohonan
                                Informasi (PPID)</a>
                            <a href="{{ route('informasi.daftar-publik') }}"
                                class="block px-6 py-3 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors font-medium border-l-4 border-transparent hover:border-emerald-500">Daftar
                                Informasi Publik</a>
                            <div class="h-px bg-slate-100 mx-6 my-1"></div>
                            <!-- Additional Info Links -->
                            <a href="{{ route('agenda.index') }}"
                                class="block px-6 py-3 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors font-medium border-l-4 border-transparent hover:border-emerald-500">Agenda
                                Kegiatan</a>
                            <a href="{{ route('galeri.index') }}"
                                class="block px-6 py-3 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors font-medium border-l-4 border-transparent hover:border-emerald-500">Galeri
                                Foto</a>
                            <a href="{{ route('dokumen.index') }}"
                                class="block px-6 py-3 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors font-medium border-l-4 border-transparent hover:border-emerald-500">Dokumen
                                Publik</a>
                        </div>
                    </div>
                </div>

                <!-- Kontak Link -->
                <a href="{{ route('kontak') }}" class="{{ $navLinkClass }}">
                    Kontak
                    <span class="{{ $underlineClass }}"></span>
                </a>

                <!-- PPID Action Button (Emerald-600) -->
                <div class="ml-6">
                    <a href="{{ route('ppid') }}" target="_blank"
                        class="px-6 py-3 bg-emerald-600 hover:bg-emerald-500 text-white text-sm font-bold uppercase tracking-wide rounded-full shadow-lg hover:shadow-emerald-500/50 transition-all duration-300 transform hover:-translate-y-1 hover:scale-105 flex items-center gap-2 border border-emerald-400/30">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        PPID
                    </a>
                </div>
            </div>

            <!-- Mobile menu button -->
            <div class="-mr-2 flex md:hidden">
                <button type="button" @click="mobileMenuOpen = !mobileMenuOpen"
                    class="bg-white/10 p-2 rounded-xl inline-flex items-center justify-center text-white hover:text-emerald-200 hover:bg-white/20 focus:outline-none transition-all duration-300 backdrop-blur-sm border border-white/10">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
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
        class="md:hidden bg-emerald-900/95 backdrop-blur-2xl border-t border-white/10 absolute top-24 w-full h-screen overflow-y-auto z-40 pb-24">
        <div class="px-4 pt-6 space-y-2">

            <a href="{{ route('home') }}"
                class="block px-4 py-3 rounded-xl text-base font-bold text-white hover:bg-white/10 transition-all border-l-4 border-transparent hover:border-emerald-400">BERANDA</a>

            <!-- Mobile Profil -->
            <div x-data="{ open: false }" class="rounded-xl overflow-hidden hover:bg-white/5">
                <button @click="open = !open"
                    class="w-full flex justify-between items-center px-4 py-3 text-base font-bold text-white transition-all border-l-4 border-transparent hover:border-emerald-400">
                    <span>PROFIL</span>
                    <svg class="h-5 w-5 transition-transform duration-300" :class="{ 'rotate-180': open }" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="open" x-collapse class="bg-black/20 space-y-1 p-2">
                    <a href="{{ route('profil.kepaladinas') }}"
                        class="block px-4 py-3 rounded-lg text-sm font-medium text-emerald-100 hover:text-white hover:bg-white/10">Kepala
                        Dinas</a>
                    <a href="{{ route('profil.sejarah') }}"
                        class="block px-4 py-3 rounded-lg text-sm font-medium text-emerald-100 hover:text-white hover:bg-white/10">Sejarah</a>
                    <a href="{{ route('profil.visimisi') }}"
                        class="block px-4 py-3 rounded-lg text-sm font-medium text-emerald-100 hover:text-white hover:bg-white/10">Visi
                        Misi</a>
                    <a href="{{ route('profil.struktur') }}"
                        class="block px-4 py-3 rounded-lg text-sm font-medium text-emerald-100 hover:text-white hover:bg-white/10">Struktur
                        Organisasi</a>
                    <a href="{{ route('profil.tupoksi') }}"
                        class="block px-4 py-3 rounded-lg text-sm font-medium text-emerald-100 hover:text-white hover:bg-white/10">Tupoksi</a>
                </div>
            </div>

            <!-- Mobile Layanan -->
            <div x-data="{ open: false }" class="rounded-xl overflow-hidden hover:bg-white/5">
                <button @click="open = !open"
                    class="w-full flex justify-between items-center px-4 py-3 text-base font-bold text-white transition-all border-l-4 border-transparent hover:border-emerald-400">
                    <span>LAYANAN</span>
                    <svg class="h-5 w-5 transition-transform duration-300" :class="{ 'rotate-180': open }" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="open" x-collapse class="bg-black/20 space-y-1 p-2">
                    <a href="{{ route('layanan.index') }}"
                        class="block px-4 py-3 rounded-lg text-sm font-bold text-emerald-100 hover:text-white hover:bg-white/10">Semua
                        Layanan</a>
                    <a href="{{ route('layanan.maklumat') }}"
                        class="block px-4 py-3 rounded-lg text-sm font-medium text-emerald-100 hover:text-white hover:bg-white/10">Maklumat
                        Pelayanan</a>
                    <a href="{{ route('layanan.inovasi') }}"
                        class="block px-4 py-3 rounded-lg text-sm font-medium text-emerald-100 hover:text-white hover:bg-white/10">Inovasi
                        Pelayanan</a>
                    <a href="{{ route('layanan.balaibenih') }}"
                        class="block px-4 py-3 rounded-lg text-sm font-medium text-emerald-100 hover:text-white hover:bg-white/10">Balai
                        Benih Ikan</a>
                    <a href="{{ route('layanan.rekomendasibbm') }}"
                        class="block px-4 py-3 rounded-lg text-sm font-medium text-emerald-100 hover:text-white hover:bg-white/10">Rekomendasi
                        BBM</a>
                    <a href="{{ route('layanan.pengaduan') }}"
                        class="block px-4 py-3 rounded-lg text-sm font-medium text-emerald-100 hover:text-white hover:bg-white/10">Pengaduan
                        Online</a>
                </div>
            </div>

            <!-- Mobile SAKIP -->
            <div x-data="{ open: false }" class="rounded-xl overflow-hidden hover:bg-white/5">
                <button @click="open = !open"
                    class="w-full flex justify-between items-center px-4 py-3 text-base font-bold text-white transition-all border-l-4 border-transparent hover:border-emerald-400">
                    <span>SAKIP</span>
                    <svg class="h-5 w-5 transition-transform duration-300" :class="{ 'rotate-180': open }" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="open" x-collapse class="bg-black/20 space-y-1 p-2">
                    <a href="{{ route('sakip.rka') }}"
                        class="block px-4 py-3 rounded-lg text-sm font-medium text-emerald-100 hover:text-white hover:bg-white/10">RKA</a>
                    <a href="{{ route('sakip.dpa') }}"
                        class="block px-4 py-3 rounded-lg text-sm font-medium text-emerald-100 hover:text-white hover:bg-white/10">DPA</a>
                    <a href="{{ route('sakip.renstra') }}"
                        class="block px-4 py-3 rounded-lg text-sm font-medium text-emerald-100 hover:text-white hover:bg-white/10">Renstra</a>
                    <a href="{{ route('sakip.renja') }}"
                        class="block px-4 py-3 rounded-lg text-sm font-medium text-emerald-100 hover:text-white hover:bg-white/10">Renja</a>
                    <a href="{{ route('sakip.ikuiki') }}"
                        class="block px-4 py-3 rounded-lg text-sm font-medium text-emerald-100 hover:text-white hover:bg-white/10">IKU
                        & IKI</a>
                    <a href="{{ route('sakip.perjanjiankinerja') }}"
                        class="block px-4 py-3 rounded-lg text-sm font-medium text-emerald-100 hover:text-white hover:bg-white/10">Perjanjian
                        Kinerja</a>
                    <a href="{{ route('sakip.renaksi') }}"
                        class="block px-4 py-3 rounded-lg text-sm font-medium text-emerald-100 hover:text-white hover:bg-white/10">Renaksi</a>
                    <a href="{{ route('sakip.lkjip') }}"
                        class="block px-4 py-3 rounded-lg text-sm font-medium text-emerald-100 hover:text-white hover:bg-white/10">LKjIP</a>
                    <a href="{{ route('sakip.lra') }}"
                        class="block px-4 py-3 rounded-lg text-sm font-medium text-emerald-100 hover:text-white hover:bg-white/10">LRA</a>
                </div>
            </div>

            <!-- Mobile Informasi -->
            <div x-data="{ open: false }" class="rounded-xl overflow-hidden hover:bg-white/5">
                <button @click="open = !open"
                    class="w-full flex justify-between items-center px-4 py-3 text-base font-bold text-white transition-all border-l-4 border-transparent hover:border-emerald-400">
                    <span>INFORMASI</span>
                    <svg class="h-5 w-5 transition-transform duration-300" :class="{ 'rotate-180': open }" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="open" x-collapse class="bg-black/20 space-y-1 p-2">
                    <a href="{{ route('berita.index') }}"
                        class="block px-4 py-3 rounded-lg text-sm font-medium text-emerald-100 hover:text-white hover:bg-white/10">Berita</a>
                    <a href="{{ route('informasi.permohonan') }}"
                        class="block px-4 py-3 rounded-lg text-sm font-medium text-emerald-100 hover:text-white hover:bg-white/10">Permohonan
                        Informasi</a>
                    <a href="{{ route('informasi.daftar-publik') }}"
                        class="block px-4 py-3 rounded-lg text-sm font-medium text-emerald-100 hover:text-white hover:bg-white/10">Daftar
                        Informasi Publik</a>
                    <a href="{{ route('agenda.index') }}"
                        class="block px-4 py-3 rounded-lg text-sm font-medium text-emerald-100 hover:text-white hover:bg-white/10">Agenda</a>
                    <a href="{{ route('galeri.index') }}"
                        class="block px-4 py-3 rounded-lg text-sm font-medium text-emerald-100 hover:text-white hover:bg-white/10">Galeri</a>
                    <a href="{{ route('dokumen.index') }}"
                        class="block px-4 py-3 rounded-lg text-sm font-medium text-emerald-100 hover:text-white hover:bg-white/10">Dokumen</a>
                </div>
            </div>

            <a href="{{ route('kontak') }}"
                class="block px-4 py-3 rounded-xl text-base font-bold text-white hover:bg-white/10 transition-all border-l-4 border-transparent hover:border-emerald-400">KONTAK</a>

            <div class="pt-6 px-4">
                <a href="{{ route('ppid') }}" target="_blank"
                    class="block w-full text-center px-6 py-4 bg-emerald-600 hover:bg-emerald-500 text-white text-lg font-bold uppercase tracking-widest rounded-xl shadow-xl transition-all border border-emerald-400/50">
                    Buka Portal PPID
                </a>
            </div>
        </div>
    </div>
</nav>