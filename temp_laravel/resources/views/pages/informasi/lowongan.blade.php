@extends('layouts.app')

@section('title', 'Lowongan Kerja - Dinas Perikanan Pamekasan')

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
                class="text-4xl md:text-5xl font-extrabold text-white mb-4 tracking-tight">
                Lowongan <span class="text-emerald-400">Kerja</span>
            </h1>
            <p x-show="show" x-transition:enter="transition ease-out duration-700 delay-300"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                class="text-emerald-100 text-lg md:text-xl max-w-2xl mx-auto font-medium leading-relaxed">
                Bergabunglah dan berkontribusi dalam pembangunan sektor kelautan dan perikanan di Kabupaten Pamekasan.
            </p>
        </div>
    </div>
</div>

<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 -mt-16 relative z-20 pb-20">
    <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border border-emerald-100">
        <div class="p-8 md:p-12">
            <!-- Header Section -->
            <div class="prose prose-emerald lg:prose-lg max-w-none">
                <p class="text-gray-600 leading-relaxed italic text-lg mb-10 border-l-4 border-emerald-500 pl-6">
                    Dinas Perikanan Kabupaten Pamekasan membuka kesempatan bagi masyarakat yang ingin bergabung dan berkontribusi dalam pembangunan sektor kelautan dan perikanan.
                </p>

                <!-- BKPSDM Section -->
                <div class="mb-16">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-12 h-12 rounded-2xl bg-emerald-100 flex items-center justify-center text-emerald-600">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                        </div>
                        <h2 class="text-2xl font-bold text-gray-800 m-0">Rekrutmen di Lingkungan Pemerintah Daerah</h2>
                    </div>
                    
                    <div class="bg-emerald-50 rounded-2xl p-6 md:p-8 border border-emerald-100">
                        <p class="text-gray-700 mb-6">
                            Untuk lowongan kerja di lingkungan Dinas Perikanan Kabupaten Pamekasan, seluruh informasi resmi dapat diakses melalui website <strong>Badan Kepegawaian dan Pengembangan Sumber Daya Manusia (BKPSDM)</strong> Kabupaten Pamekasan pada alamat berikut:
                        </p>
                        
                        <a href="https://bkpsdm.pamekasankab.go.id" target="_blank" class="inline-flex items-center gap-2 px-6 py-3 bg-emerald-600 text-white font-bold rounded-xl hover:bg-emerald-700 transition-all shadow-lg hover:shadow-emerald-200 group">
                            <span>bkpsdm.pamekasankab.go.id</span>
                            <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>

                        <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="flex items-center gap-3 text-gray-600">
                                <div class="w-2 h-2 rounded-full bg-emerald-500"></div>
                                <span>Penerimaan ASN (PNS dan PPPK)</span>
                            </div>
                            <div class="flex items-center gap-3 text-gray-600">
                                <div class="w-2 h-2 rounded-full bg-emerald-500"></div>
                                <span>Formasi dan persyaratan rekrutmen</span>
                            </div>
                            <div class="flex items-center gap-3 text-gray-600">
                                <div class="w-2 h-2 rounded-full bg-emerald-500"></div>
                                <span>Jadwal seleksi dan pengumuman</span>
                            </div>
                            <div class="flex items-center gap-3 text-gray-600">
                                <div class="w-2 h-2 rounded-full bg-emerald-500"></div>
                                <span>Informasi CPNS, PPPK, dan mutasi</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- External Links Section -->
                <div class="mb-16">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-12 h-12 rounded-2xl bg-blue-100 flex items-center justify-center text-blue-600">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h2 class="text-2xl font-bold text-gray-800 m-0">Informasi Lowongan Kerja Lainnya</h2>
                    </div>
                    
                    <p class="text-gray-700 mb-8">
                        Selain rekrutmen pemerintah, masyarakat juga dapat mencari dan memantau berbagai lowongan kerja di sektor kelautan, perikanan, dan industri terkait melalui berbagai situs pencari kerja terpercaya:
                    </p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                        <a href="https://karirhub.kemnaker.go.id" target="_blank" class="p-4 rounded-2xl border border-gray-100 hover:border-emerald-200 hover:bg-emerald-50 transition-all group">
                            <span class="block font-bold text-gray-800 group-hover:text-emerald-700">Karirhub Kemnaker</span>
                            <span class="text-xs text-gray-500">Portal Resmi Kemnaker</span>
                        </a>
                        <a href="https://www.jobstreet.co.id" target="_blank" class="p-4 rounded-2xl border border-gray-100 hover:border-emerald-200 hover:bg-emerald-50 transition-all group">
                            <span class="block font-bold text-gray-800 group-hover:text-emerald-700">JobStreet</span>
                            <span class="text-xs text-gray-500">jobstreet.co.id</span>
                        </a>
                        <a href="https://id.indeed.com" target="_blank" class="p-4 rounded-2xl border border-gray-100 hover:border-emerald-200 hover:bg-emerald-50 transition-all group">
                            <span class="block font-bold text-gray-800 group-hover:text-emerald-700">Indeed ID</span>
                            <span class="text-xs text-gray-500">id.indeed.com</span>
                        </a>
                        <a href="https://www.kalibrr.com" target="_blank" class="p-4 rounded-2xl border border-gray-100 hover:border-emerald-200 hover:bg-emerald-50 transition-all group">
                            <span class="block font-bold text-gray-800 group-hover:text-emerald-700">Kalibrr</span>
                            <span class="text-xs text-gray-500">kalibrr.com</span>
                        </a>
                        <a href="https://glints.com/id" target="_blank" class="p-4 rounded-2xl border border-gray-100 hover:border-emerald-200 hover:bg-emerald-50 transition-all group">
                            <span class="block font-bold text-gray-800 group-hover:text-emerald-700">Glints</span>
                            <span class="text-xs text-gray-500">glints.com/id</span>
                        </a>
                    </div>
                </div>

                <!-- Warning Section -->
                <div class="bg-amber-50 rounded-3xl p-8 md:p-10 border border-amber-100">
                    <div class="flex items-start gap-6">
                        <div class="w-12 h-12 rounded-2xl bg-amber-100 flex items-center justify-center text-amber-600 shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-amber-900 mb-2">Himbauan Keamanan</h3>
                            <p class="text-amber-800 leading-relaxed mb-0">
                                Kami mengimbau masyarakat untuk selalu <strong>berhati-hati terhadap penipuan lowongan kerja</strong>. Pastikan informasi diperoleh dari sumber resmi dan tidak memberikan data pribadi atau membayar biaya apapun tanpa kejelasan legalitas.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
