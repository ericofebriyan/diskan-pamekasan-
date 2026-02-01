@extends('layouts.app')

@section('title', 'Visi & Misi - Dinas Perikanan Kabupaten Pamekasan')

@section('content')
    <!-- Hero Section -->
    <div class="relative pt-32 pb-20 bg-emerald-900 overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <svg class="h-full w-full" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
                <path d="M0 100 C 20 0 50 0 100 100 Z"></path>
            </svg>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4 tracking-tight uppercase">Visi & Misi</h1>
            <p class="text-emerald-200 text-lg md:text-xl max-w-3xl mx-auto">
                Landasan dan Arah Pembangunan Perikanan Kabupaten Pamekasan
            </p>
            <div class="mt-6 w-24 h-1.5 bg-yellow-400 mx-auto rounded-full"></div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-10 mb-20 relative z-20">
        <!-- Visi Card -->
        <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border border-slate-100 mb-12">
            <div class="p-8 md:p-12 lg:p-16">
                <div class="flex flex-col md:flex-row gap-12 items-center">
                    <div class="w-full md:w-1/3 text-center">
                        <div class="inline-flex items-center justify-center w-24 h-24 bg-emerald-100 rounded-3xl text-emerald-600 mb-6 rotate-3">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                        </div>
                        <h2 class="text-4xl font-black text-slate-900 tracking-tighter italic">V I S I</h2>
                    </div>
                    <div class="w-full md:w-2/3">
                        <div class="relative">
                            <svg class="absolute -top-6 -left-8 w-16 h-16 text-emerald-50" fill="currentColor" viewBox="0 0 32 32"><path d="M10 8v8H6v-8h4zm12 0v8h-4v-8h4z"></path></svg>
                            <div class="prose prose-lg max-w-none text-slate-700 leading-relaxed space-y-4 relative z-10 text-justify">
                                <p class="font-semibold text-emerald-800 text-xl mb-4 italic">
                                    "Dinas Perikanan Kabupaten Pamekasan sebagai subyek utama pembangunan berkelanjutan."
                                </p>
                                <p>
                                    Bertolak dari visi Kabupaten Pamekasan yakni <span class="font-bold text-slate-900">“Terwujudnya Pamekasan yang maju, berdaya, mandiri, berkeadilan, aman dan sejahtera menuju ridha Allah SWT“</span>, serta sejalan dengan menurunnya daya dukung sumber daya alam, maka harus ada keseimbangan antara pemanfaatan dan kelestarian sumber daya.
                                </p>
                                <p>
                                    Pemanfaatan sumber daya perikanan dan kelautan tidak untuk saat ini saja tetapi juga untuk generasi mendatang. Pemanfaatan sumber daya perikanan dan kelautan juga harus menempatkan masyarakat nelayan, pembudidaya ikan dan pelaku usaha perikanan sebagai subyek utama pembangunan berkelanjutan.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Misi Card -->
            <div class="bg-white rounded-3xl shadow-xl overflow-hidden border border-slate-100 h-full">
                <div class="bg-emerald-600 px-8 py-6 flex items-center gap-4">
                    <div class="w-10 h-10 bg-white/20 rounded-lg flex items-center justify-center text-white">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path></svg>
                    </div>
                    <h2 class="text-2xl font-bold text-white tracking-widest uppercase">M I S I</h2>
                </div>
                <div class="p-8">
                    <ul class="space-y-6">
                        @foreach([
                            'Meningkatkan kesejahteraan masyarakat nelayan, pembudidaya ikan, dan pelaku usaha kelautan dan perikanan lainnya',
                            'Meningkatkan peran sektor kelautan dan perikanan sebagai sumber pertumbuhan ekonomi daerah dan penyerap lapangan kerja',
                            'Memelihara daya dukung dan meningkatkan kualitas lingkungan sumberdaya kelautan dan perikanan',
                            'Mendorong peningkatan konsumsi ikan untuk penyediaan pangan dan perbaikan gizi masyarakat',
                            'Meningkatkan kapasitas kelembagaan, perbaikan prasarana dan kualitas SDM perikanan dan kelautan',
                            'Memantapkan sistem pendukung yang terdiri dari teknologi, permodalan, iklim usaha yang kondusif'
                        ] as $index => $misi)
                        <li class="flex gap-4 items-start group">
                            <span class="flex-shrink-0 w-8 h-8 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center font-bold text-sm group-hover:bg-emerald-600 group-hover:text-white transition-colors duration-300">{{ $index + 1 }}</span>
                            <p class="text-slate-600 group-hover:text-slate-900 transition-colors duration-300 text-sm leading-relaxed">{{ $misi }}</p>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <!-- Tujuan Card -->
            <div class="bg-white rounded-3xl shadow-xl overflow-hidden border border-slate-100 h-full">
                <div class="bg-blue-600 px-8 py-6 flex items-center gap-4">
                    <div class="w-10 h-10 bg-white/20 rounded-lg flex items-center justify-center text-white">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h2 class="text-2xl font-bold text-white tracking-widest uppercase">TUJUAN</h2>
                </div>
                <div class="p-8">
                    <p class="text-sm text-slate-500 mb-6 italic">
                        Berdasarkan visi, misi dan faktor-faktor kunci keberhasilan, Dinas Perikanan Kabupaten Pamekasan menetapkan tujuan sebagai berikut:
                    </p>
                    <div class="grid grid-cols-1 gap-4">
                        @foreach([
                            'Mengoptimalkan Kinerja Karyawan',
                            'Meningkatkan kualitas SDM pelaku perikanan',
                            'Meningkatkan kesejahteraan nelayan',
                            'Mengembangkan sektor budidaya sebagai mata pencaharian alternatif',
                            'Meningkatkan kualitas hasil tangkapan maupun olahan',
                            'Mengoptimalkan pelaksanaan kegiatan pembangunan yang dibiayai APBD maupun APBN'
                        ] as $index => $tujuan)
                        <div class="bg-slate-50 p-4 rounded-xl border border-slate-100 flex items-center gap-4 group hover:border-blue-300 hover:bg-blue-50 transition-all duration-300">
                            <div class="w-2 h-2 rounded-full bg-blue-500 group-hover:scale-150 transition-transform"></div>
                            <p class="text-slate-700 font-medium text-sm">{{ $tujuan }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection