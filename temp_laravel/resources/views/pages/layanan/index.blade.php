@extends('layouts.app')

@section('title', 'Layanan - Dinas Perikanan Kabupaten Pamekasan')

@section('content')
    <div class="pt-24 pb-12 bg-emerald-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center" data-aos="fade-down">
            <h1 class="text-4xl font-bold text-white mb-4">Layanan Kami</h1>
            <p class="text-emerald-100 text-lg">Daftar Layanan Dinas Perikanan Kabupaten Pamekasan</p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Maklumat Pelayanan -->
            <div data-aos="fade-up" data-aos-delay="100"
                class="bg-white rounded-lg shadow-sm p-6 hover:shadow-xl transition-all duration-300 border border-slate-100 flex flex-col">
                <div class="w-12 h-12 bg-emerald-100 rounded-lg flex items-center justify-center text-emerald-600 mb-4">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-2">Maklumat Pelayanan</h3>
                <p class="text-slate-600 mb-4 flex-grow">Informasi mengenai standar dan komitmen pelayanan publik kami.</p>
                <a href="{{ route('layanan.maklumat') }}"
                    class="text-emerald-600 font-semibold hover:text-emerald-700 flex items-center mt-auto">
                    Selengkapnya <svg class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>

            <!-- Inovasi Pelayanan -->
            <div data-aos="fade-up" data-aos-delay="200"
                class="bg-white rounded-lg shadow-sm p-6 hover:shadow-xl transition-all duration-300 border border-slate-100 flex flex-col">
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center text-blue-600 mb-4">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-2">Inovasi Pelayanan</h3>
                <p class="text-slate-600 mb-4 flex-grow">Berbagai inovasi yang kami kembangkan untuk meningkatkan kualitas
                    layanan.</p>
                <a href="{{ route('layanan.inovasi') }}"
                    class="text-blue-600 font-semibold hover:text-blue-700 flex items-center mt-auto">
                    Selengkapnya <svg class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>

            <!-- Balai Benih -->
            <div data-aos="fade-up" data-aos-delay="300"
                class="bg-white rounded-lg shadow-sm p-6 hover:shadow-xl transition-all duration-300 border border-slate-100 flex flex-col">
                <div class="w-12 h-12 bg-teal-100 rounded-lg flex items-center justify-center text-teal-600 mb-4">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-2">Balai Benih Ikan</h3>
                <p class="text-slate-600 mb-4 flex-grow">Layanan penyediaan benih ikan berkualitas untuk pembudidaya.</p>
                <a href="{{ route('layanan.balaibenih') }}"
                    class="text-teal-600 font-semibold hover:text-teal-700 flex items-center mt-auto">
                    Selengkapnya <svg class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>

            <!-- Rekomendasi BBM -->
            <div data-aos="fade-up" data-aos-delay="400"
                class="bg-white rounded-lg shadow-sm p-6 hover:shadow-xl transition-all duration-300 border border-slate-100 flex flex-col">
                <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center text-yellow-600 mb-4">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-2">Rekomendasi BBM</h3>
                <p class="text-slate-600 mb-4 flex-grow">Fasilitas rekomendasi pembelian BBM bersubsidi bagi nelayan.</p>
                <a href="{{ route('layanan.rekomendasibbm') }}"
                    class="text-yellow-600 font-semibold hover:text-yellow-700 flex items-center mt-auto">
                    Selengkapnya <svg class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>

            <!-- Pengaduan -->
            <div data-aos="fade-up" data-aos-delay="500"
                class="bg-white rounded-lg shadow-sm p-6 hover:shadow-xl transition-all duration-300 border border-slate-100 flex flex-col">
                <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center text-red-600 mb-4">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-2">Pengaduan Online</h3>
                <p class="text-slate-600 mb-4 flex-grow">Sampaikan aspirasi dan pengaduan Anda terkait layanan kami.</p>
                <a href="{{ route('layanan.pengaduan') }}"
                    class="text-red-600 font-semibold hover:text-red-700 flex items-center mt-auto">
                    Buat Pengaduan <svg class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
@endsection