@extends('layouts.app')

@section('title', 'LKjIP - Dinas Perikanan Pamekasan')

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
                Laporan Kinerja <span class="text-emerald-400">Instansi Pemerintah (LKjIP)</span>
            </h1>
            <p x-show="show" x-transition:enter="transition ease-out duration-700 delay-300"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                class="text-emerald-100 text-lg md:text-xl max-w-2xl mx-auto font-medium leading-relaxed">
                Pertanggungjawaban tahunan atas pencapaian target dan sasaran strategis.
            </p>
        </div>
    </div>
</div>

<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 -mt-16 relative z-20 pb-20">
    <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border border-emerald-100">
        <div class="p-8 md:p-12">
            <div class="prose prose-emerald lg:prose-lg max-w-none text-gray-600">
                <div class="bg-gradient-to-br from-slate-50 to-white p-8 rounded-3xl mb-12 border border-slate-100 shadow-sm relative overflow-hidden">
                    <div class="relative z-10">
                        <p class="leading-relaxed mb-6 font-medium text-gray-800 italic">
                            "Laporan Kinerja Instansi Pemerintah (LKjIP) adalah laporan kinerja tahunan yang berisi pertanggungjawaban kinerja suatu instansi dalam mencapai tujuan/sasaran strategis instansi."
                        </p>
                        <p class="leading-relaxed m-0 text-sm">
                            Laporan ini berisi ikhtisar pencapaian sasaran sebagaimana yang ditetapkan dalam dokumen perjanjian kinerja dan dokumen perencanaan sebagai perwujudan kewajiban suatu instansi pemerintah untuk mempertanggungjawabkan keberhasilan dan kegagalan pelaksanaan misi organisasi dalam mencapai sasaran dan tujuan yang telah ditetapkan melalui Sistem Akuntabilitas Kinerja Instansi Pemerintah.
                        </p>
                    </div>
                </div>

                <div class="flex items-center gap-4 mb-8">
                    <div class="w-12 h-12 rounded-2xl bg-emerald-100 flex items-center justify-center text-emerald-600 shadow-inner">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800 m-0">Dokumen LKjIP Dinas Perikanan</h2>
                        <p class="text-sm text-gray-500 m-0">Berikut Laporan Kinerja Instansi Pemerintah (LKjIP) Dinas Perikanan Kabupaten Pamekasan:</p>
                    </div>
                </div>

                <!-- Document Table -->
                <div class="overflow-x-auto rounded-2xl border border-gray-100 shadow-sm">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-4 text-left text-xs font-bold text-gray-500 uppercase tracking-wider w-16">No.</th>
                                <th scope="col" class="px-6 py-4 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Judul</th>
                                <th scope="col" class="px-6 py-4 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Uraian</th>
                                <th scope="col" class="px-6 py-4 text-center text-xs font-bold text-gray-500 uppercase tracking-wider w-32">Download</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-100">
                            @forelse($documents as $index => $doc)
                            <tr class="hover:bg-emerald-50 transition-colors group">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $index + 1 }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-bold text-emerald-700">{{ $doc->judul }}</td>
                                <td class="px-6 py-4 text-sm text-gray-600">{{ $doc->deskripsi ?? '-' }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-center">
                                    <a href="{{ asset('storage/' . $doc->file_path) }}" target="_blank" class="inline-flex items-center px-4 py-2 bg-emerald-100 text-emerald-700 text-xs font-bold rounded-lg hover:bg-emerald-600 hover:text-white transition-all shadow-sm">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11v6m0 0l-3-3m3 3l3-3"></path>
                                        </svg>
                                        PDF
                                    </a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="px-6 py-10 text-center text-gray-500 italic">Belum ada dokumen LKjIP yang tersedia.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- Info Alert -->
                <div class="mt-10 bg-blue-50 border-l-4 border-blue-400 p-6 rounded-xl shadow-sm">
                    <div class="flex items-start gap-4">
                        <div class="text-blue-500">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-blue-700 text-sm font-medium m-0">
                                Klik tombol <strong>PDF</strong> pada tabel di atas untuk mengunduh Laporan Kinerja Instansi Pemerintah. Dokumen ini merupakan bukti nyata akuntabilitas publik Dinas Perikanan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
