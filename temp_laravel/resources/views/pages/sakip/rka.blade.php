@extends('layouts.app')

@section('title', 'Rencana Kerja & Anggaran (RKA)')

@section('content')
    <div class="pt-28 pb-12 min-h-screen bg-slate-50 relative overflow-hidden">
        <!-- Background Decor (Optional Subtle) -->
        <div class="absolute top-0 left-0 w-full h-96 bg-gradient-to-b from-emerald-50 to-transparent -z-10"></div>
        <div class="absolute -top-10 right-0 w-96 h-96 bg-teal-100/30 rounded-full blur-3xl -z-10"></div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Page Title -->
            <h1 class="text-3xl md:text-4xl font-bold text-center text-slate-800 mb-10 font-outfit uppercase tracking-wide"
                data-aos="fade-down">
                Rencana Kerja Anggaran (RKA)
            </h1>

            <!-- Narrative Section (Glass Card) -->
            <div class="mb-10 bg-white/60 backdrop-blur-md rounded-2xl shadow-sm border border-white/50 p-6 md:p-8 relative overflow-hidden"
                data-aos="fade-up" data-aos-delay="100">
                <!-- Vertical Accent Bar -->
                <div class="absolute left-0 top-0 bottom-0 w-1.5 bg-emerald-600 mt-6 mb-6 rounded-r-lg ml-0.5 md:ml-0">
                </div>

                <div class="pl-6 md:pl-8">
                    <p class="text-slate-700 leading-8 text-base md:text-lg mb-6 text-justify">
                        Rencana Kerja dan Anggaran (RKA) merupakan dokumen perencanaan yang memuat rencana kegiatan serta
                        anggaran yang dibutuhkan untuk mendukung pelaksanaan program dan kegiatan instansi pemerintah dalam
                        satu tahun anggaran. RKA disusun sebagai dasar dalam pengelolaan keuangan, mulai dari perencanaan,
                        pelaksanaan, hingga pelaporan. Dokumen ini bertujuan untuk memastikan bahwa setiap kegiatan yang
                        direncanakan dapat berjalan dengan efektif dan efisien sesuai dengan tujuan yang telah ditetapkan.
                    </p>
                    <p class="text-slate-700 leading-8 text-base md:text-lg text-justify">
                        Dalam konteks Dinas Perikanan Kabupaten Pamekasan, RKA menjadi pedoman penting dalam merancang
                        berbagai program yang berkaitan dengan pengembangan sektor perikanan, pemberdayaan nelayan, serta
                        pengelolaan sumber daya perikanan yang berkelanjutan. Penyusunan RKA dilakukan dengan
                        mempertimbangkan kebutuhan lokal, potensi wilayah, serta kebijakan strategis yang berlaku, sehingga
                        diharapkan mampu memberikan dampak positif bagi masyarakat dan lingkungan sekitar.
                    </p>
                    <p class="text-slate-700 leading-8 text-base md:text-lg mt-6 font-medium">
                        Berikut adalah Dokumen RKA Dinas Perikanan Kabupaten Pamekasan:
                    </p>
                </div>
            </div>

            <!-- Elegant Data Table -->
            <div class="bg-white rounded-xl shadow-[0_10px_40px_-15px_rgba(0,0,0,0.1)] overflow-hidden border border-slate-100"
                data-aos="fade-up" data-aos-delay="300">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-emerald-700 text-white">
                                <th class="px-8 py-5 font-bold text-sm uppercase tracking-wider w-16 text-center">No.</th>
                                <th class="px-8 py-5 font-bold text-sm uppercase tracking-wider w-1/4">Judul</th>
                                <th class="px-8 py-5 font-bold text-sm uppercase tracking-wider">Uraian</th>
                                <th class="px-8 py-5 font-bold text-sm uppercase tracking-wider w-32 text-center">Download
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            <!-- Row 1 -->
                            <tr class="hover:bg-emerald-50 transition-colors duration-300 group">
                                <td class="px-8 py-6 text-center font-medium text-slate-500">1</td>
                                <td class="px-8 py-6">
                                    <span
                                        class="font-semibold text-slate-800 text-lg group-hover:text-emerald-700 transition-colors">RKA
                                        Tahun 2025</span>
                                </td>
                                <td class="px-8 py-6">
                                    <p class="text-slate-600 leading-relaxed">Rencana Kerja Anggaran Dinas Perikanan
                                        Kabupaten Pamekasan Tahun 2025</p>
                                </td>
                                <td class="px-8 py-6 text-center">
                                    <button
                                        class="inline-flex items-center justify-center w-10 h-10 rounded-full border-2 border-emerald-500 text-emerald-600 hover:bg-emerald-500 hover:text-white transition-all duration-300 group/btn shadow-sm hover:shadow-emerald-200">
                                        <svg class="w-5 h-5 group-hover/btn:animate-bounce" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <!-- Row 2 -->
                            <tr class="hover:bg-emerald-50 transition-colors duration-300 group">
                                <td class="px-8 py-6 text-center font-medium text-slate-500">2</td>
                                <td class="px-8 py-6">
                                    <span
                                        class="font-semibold text-slate-800 text-lg group-hover:text-emerald-700 transition-colors">RKA
                                        Tahun 2024</span>
                                </td>
                                <td class="px-8 py-6">
                                    <p class="text-slate-600 leading-relaxed">Rencana Kerja Anggaran Dinas Perikanan
                                        Kabupaten Pamekasan Tahun 2024</p>
                                </td>
                                <td class="px-8 py-6 text-center">
                                    <button
                                        class="inline-flex items-center justify-center w-10 h-10 rounded-full border-2 border-emerald-500 text-emerald-600 hover:bg-emerald-500 hover:text-white transition-all duration-300 group/btn shadow-sm hover:shadow-emerald-200">
                                        <svg class="w-5 h-5 group-hover/btn:animate-bounce" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection