<nav x-data="{ open: false }" 
     class="bg-emerald-900 shadow-lg border-b border-emerald-700 sticky top-0 z-50">
    
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-24">
            <div class="flex items-center">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}" class="flex items-center gap-4 group">
                        <img src="{{ asset('images/logo-pamekasan.png') }}" alt="Logo Pamekasan" 
                             class="w-auto h-14 drop-shadow-lg transition-transform duration-300 group-hover:scale-105">
                        <div class="flex flex-col text-white">
                            <span class="font-bold leading-none tracking-wide text-shadow-sm text-2xl">
                                DINAS PERIKANAN
                            </span>
                            <span class="text-emerald-200 font-medium tracking-[0.3em] text-sm group-hover:text-white transition-colors duration-300">
                                KAB. PAMEKASAN
                            </span>
                        </div>
                    </a>
                </div>

                <!-- Public Navigation Links -->
                <div class="hidden space-x-1 sm:-my-px sm:ms-10 lg:flex items-center h-full ml-12">
                    
                    @php
                        $navClasses = "relative px-4 py-2 text-sm font-medium text-emerald-100 hover:text-white transition-all duration-300 hover:bg-white/10 rounded-lg group";
                        $activeClasses = "bg-white/10 text-white shadow-inner";
                    @endphp

                    <a href="{{ route('home') }}" class="{{ $navClasses }} {{ request()->routeIs('home') ? $activeClasses : '' }}">
                        Beranda
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-yellow-400 transition-all duration-300 group-hover:w-full"></span>
                    </a>

                    <!-- Profil Dropdown -->
                    <div class="relative group" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                        <button class="{{ $navClasses }} inline-flex items-center outline-none">
                            Profil
                            <svg class="ms-1.5 h-4 w-4 fill-current opacity-70 group-hover:opacity-100 transition-transform duration-300 group-hover:rotate-180" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
                        </button>
                        <div x-show="open" 
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0 translate-y-2"
                             x-transition:enter-end="opacity-100 translate-y-0"
                             x-transition:leave="transition ease-in duration-150"
                             x-transition:leave-start="opacity-100 translate-y-0"
                             x-transition:leave-end="opacity-0 translate-y-2"
                             class="absolute left-0 mt-0 w-56 rounded-xl shadow-2xl bg-white ring-1 ring-black ring-opacity-5 overflow-hidden z-50">
                            <div class="py-1">
                                <a href="{{ route('profil.gambaranumum') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors border-b border-gray-100">Gambaran Umum</a>
                                <a href="{{ route('profil.visimisi') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors border-b border-gray-100">Visi & Misi</a>
                                <a href="{{ route('profil.struktur') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors border-b border-gray-100">Struktur Organisasi</a>
                                <a href="{{ url('/#layanan') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors">Bidang Pelayanan</a>
                            </div>
                        </div>
                    </div>

                    <!-- Layanan Dropdown -->
                    <div class="relative group" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                        <button class="{{ $navClasses }} inline-flex items-center outline-none">
                            Layanan
                            <svg class="ms-1.5 h-4 w-4 fill-current opacity-70 group-hover:opacity-100 transition-transform duration-300 group-hover:rotate-180" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
                        </button>
                        <div x-show="open" 
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0 translate-y-2"
                             x-transition:enter-end="opacity-100 translate-y-0"
                             x-transition:leave="transition ease-in duration-150"
                             x-transition:leave-start="opacity-100 translate-y-0"
                             x-transition:leave-end="opacity-0 translate-y-2"
                             class="absolute left-0 mt-0 w-56 rounded-xl shadow-2xl bg-white ring-1 ring-black ring-opacity-5 overflow-hidden z-50">
                            <div class="py-1">
                                <a href="{{ route('layanan.maklumat') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors border-b border-gray-100">Maklumat Pelayanan</a>
                                <a href="{{ route('layanan.inovasi') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors border-b border-gray-100">Inovasi</a>
                                <a href="{{ route('layanan.balaibenih') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors border-b border-gray-100">Balai Benih Ikan</a>
                                <a href="{{ route('layanan.rekomendasibbm') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors border-b border-gray-100">Rekomendasi BBM</a>
                                <a href="{{ route('layanan.pengaduan') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors">Pengaduan</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Informasi Dropdown -->
                    <div class="relative group" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                        <button class="{{ $navClasses }} inline-flex items-center outline-none">
                            Informasi
                            <svg class="ms-1.5 h-4 w-4 fill-current opacity-70 group-hover:opacity-100 transition-transform duration-300 group-hover:rotate-180" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
                        </button>
                        <div x-show="open" 
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0 translate-y-2"
                             x-transition:enter-end="opacity-100 translate-y-0"
                             x-transition:leave="transition ease-in duration-150"
                             x-transition:leave-start="opacity-100 translate-y-0"
                             x-transition:leave-end="opacity-0 translate-y-2"
                             class="absolute left-0 mt-0 w-64 rounded-xl shadow-2xl bg-white ring-1 ring-black ring-opacity-5 overflow-hidden z-50">
                            <div class="py-1">
                                <a href="{{ route('berita.index') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors border-b border-gray-100">Berita</a>
                                <a href="https://www.jotform.com/app/e-ppid/pamekasan/page/11" target="_blank" rel="noopener noreferrer" class="block px-4 py-3 text-sm text-gray-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors border-b border-gray-100">Permohonan Informasi</a>
                                <a href="{{ route('informasi.daftar-publik') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors border-b border-gray-100">Daftar Informasi Publik</a>
                                <a href="{{ route('informasi.lowongan') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors">Lowongan Pekerjaan</a>
                            </div>
                        </div>
                    </div>

                    <!-- SAKIP Dropdown -->
                    <div class="relative group" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                        <button class="{{ $navClasses }} inline-flex items-center outline-none">
                            SAKIP
                            <svg class="ms-1.5 h-4 w-4 fill-current opacity-70 group-hover:opacity-100 transition-transform duration-300 group-hover:rotate-180" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
                        </button>
                        <div x-show="open" 
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0 translate-y-2"
                             x-transition:enter-end="opacity-100 translate-y-0"
                             x-transition:leave="transition ease-in duration-150"
                             x-transition:leave-start="opacity-100 translate-y-0"
                             x-transition:leave-end="opacity-0 translate-y-2"
                             class="absolute left-0 mt-0 w-64 rounded-xl shadow-2xl bg-white ring-1 ring-black ring-opacity-5 overflow-hidden z-50">
                            <div class="py-1">
                                <a href="{{ route('sakip.rka') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors border-b border-gray-100">RKA</a>
                                <a href="{{ route('sakip.dpa') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors border-b border-gray-100">DPA</a>
                                <a href="{{ route('sakip.renstra') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors border-b border-gray-100">Renstra</a>
                                <a href="{{ route('sakip.renja') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors border-b border-gray-100">Renja</a>
                                <a href="{{ route('sakip.ikuiki') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors border-b border-gray-100">IKU dan IKI</a>
                                <a href="{{ route('sakip.perjanjiankinerja') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors border-b border-gray-100">Perjanjian Kinerja</a>
                                <a href="{{ route('sakip.renaksi') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors border-b border-gray-100">Renaksi</a>
                                <a href="{{ route('sakip.lkjip') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors border-b border-gray-100">LKJIP</a>
                                <a href="{{ route('sakip.lra') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors">LRA</a>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('ppid') }}" class="{{ $navClasses }} {{ request()->routeIs('ppid') ? $activeClasses : '' }}">
                        PPID
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-yellow-400 transition-all duration-300 group-hover:w-full"></span>
                    </a>

                    @auth
                        @if(auth()->user()->usertype === 'admin')
                             <a href="{{ route('dashboard') }}" class="inline-flex items-center justify-center px-4 py-2 text-sm font-bold text-yellow-300 hover:text-yellow-100 transition-all duration-300 hover:scale-105 ml-4 border-2 border-yellow-400 rounded-full hover:bg-yellow-400 hover:text-emerald-900">
                                Dashboard Admin
                            </a>
                        @endif
                    @endauth

                </div>
            </div>

            <!-- Settings / Login Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                @auth
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-4 py-2 border-2 border-emerald-600 text-sm leading-4 font-semibold rounded-full text-white bg-emerald-700 hover:bg-emerald-600 focus:outline-none transition ease-in-out duration-300 shadow-md hover:shadow-lg">
                                <div>{{ Auth::user()->name }}</div>
                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>
                             <x-dropdown-link :href="route('dashboard')">
                                {{ __('Dashboard') }}
                            </x-dropdown-link>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                @else
                    <div class="flex gap-3 items-center">
                        <a href="{{ route('login') }}" class="text-emerald-100 hover:text-white font-medium transition-colors">Log in</a>
                        <a href="{{ route('register') }}" class="px-5 py-2.5 text-sm font-bold text-emerald-900 bg-yellow-400 rounded-full hover:bg-yellow-300 shadow-lg hover:shadow-xl hover:scale-105 transition-all duration-300">
                            Register
                        </a>
                    </div>
                @endauth
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center lg:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden lg:hidden bg-white border-t">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">
                {{ __('Beranda') }}
            </x-responsive-nav-link>
            <div x-data="{ openProfil: false }">
                <button @click="openProfil = ! openProfil" class="w-full text-start">
                    <x-responsive-nav-link :active="request()->routeIs('profil.*')">
                        {{ __('Profil') }}
                    </x-responsive-nav-link>
                </button>
                <div x-show="openProfil" class="pl-4">
                    <x-responsive-nav-link :href="route('profil.gambaranumum')">{{ __('Gambaran Umum') }}</x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('profil.visimisi')">{{ __('Visi & Misi') }}</x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('profil.struktur')">{{ __('Struktur Organisasi') }}</x-responsive-nav-link>
                    <x-responsive-nav-link :href="url('/#layanan')">{{ __('Bidang Pelayanan') }}</x-responsive-nav-link>
                </div>
            </div>

            <div x-data="{ openLayanan: false }">
                <button @click="openLayanan = ! openLayanan" class="w-full text-start">
                    <x-responsive-nav-link :active="request()->routeIs('layanan.*')">
                        {{ __('Layanan') }}
                    </x-responsive-nav-link>
                </button>
                <div x-show="openLayanan" class="pl-4">
                    <x-responsive-nav-link :href="route('layanan.maklumat')">{{ __('Maklumat Pelayanan') }}</x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('layanan.inovasi')">{{ __('Inovasi') }}</x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('layanan.balaibenih')">{{ __('Balai Benih Ikan') }}</x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('layanan.rekomendasibbm')">{{ __('Rekomendasi BBM') }}</x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('layanan.pengaduan')">{{ __('Pengaduan') }}</x-responsive-nav-link>
                </div>
            </div>

            <div x-data="{ openInfo: false }">
                <button @click="openInfo = ! openInfo" class="w-full text-start">
                    <x-responsive-nav-link :active="request()->routeIs('informasi.*') || request()->routeIs('berita.*')">
                        {{ __('Informasi') }}
                    </x-responsive-nav-link>
                </button>
                <div x-show="openInfo" class="pl-4">
                    <x-responsive-nav-link :href="route('berita.index')" :active="request()->routeIs('berita.*')">{{ __('Berita') }}</x-responsive-nav-link>
                    <x-responsive-nav-link href="https://www.jotform.com/app/e-ppid/pamekasan/page/11" target="_blank">{{ __('Permohonan Informasi') }}</x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('informasi.daftar-publik')">{{ __('Daftar Informasi Publik') }}</x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('informasi.lowongan')">{{ __('Lowongan Pekerjaan') }}</x-responsive-nav-link>
                </div>
            </div>

            <div x-data="{ openSakip: false }">
                <button @click="openSakip = ! openSakip" class="w-full text-start">
                    <x-responsive-nav-link :active="request()->routeIs('sakip.*')">
                        {{ __('SAKIP') }}
                    </x-responsive-nav-link>
                </button>
                <div x-show="openSakip" class="pl-4">
                    <x-responsive-nav-link :href="route('sakip.rka')">{{ __('RKA') }}</x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('sakip.dpa')">{{ __('DPA') }}</x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('sakip.renstra')">{{ __('Renstra') }}</x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('sakip.renja')">{{ __('Renja') }}</x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('sakip.ikuiki')">{{ __('IKU dan IKI') }}</x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('sakip.perjanjiankinerja')">{{ __('Perjanjian Kinerja') }}</x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('sakip.renaksi')">{{ __('Renaksi') }}</x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('sakip.lkjip')">{{ __('LKJIP') }}</x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('sakip.lra')">{{ __('LRA') }}</x-responsive-nav-link>
                </div>
            </div>

            <x-responsive-nav-link :href="route('ppid')" :active="request()->routeIs('ppid')">
                {{ __('PPID') }}
            </x-responsive-nav-link>

            @auth
                @if(auth()->user()->usertype === 'admin')
                    <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-yellow-600 font-bold">
                        {{ __('Dashboard Admin') }}
                    </x-responsive-nav-link>
                @endif
            @endauth
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            @auth
                <div class="px-4">
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
                <div class="mt-3 space-y-1">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            @else
                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('login')">
                        {{ __('Log in') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('register')">
                        {{ __('Register') }}
                    </x-responsive-nav-link>
                </div>
            @endauth
        </div>
    </div>
</nav>
