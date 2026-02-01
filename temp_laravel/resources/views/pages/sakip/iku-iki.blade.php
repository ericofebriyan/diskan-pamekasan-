@extends('layouts.app')

@section('title', 'IKU & IKI - Dinas Perikanan Pamekasan')

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
                IKU dan <span class="text-emerald-400">IKI</span>
            </h1>
            <p x-show="show" x-transition:enter="transition ease-out duration-700 delay-300"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                class="text-emerald-100 text-lg md:text-xl max-w-2xl mx-auto font-medium leading-relaxed">
                Indikator Kinerja Utama dan Indikator Kinerja Individu sebagai tolok ukur keberhasilan organisasi.
            </p>
        </div>
    </div>
</div>

<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 -mt-16 relative z-20 pb-20">
    <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border border-emerald-100">
        <div class="p-8 md:p-12">
            <div class="prose prose-emerald lg:prose-lg max-w-none text-gray-600">
                <div class="grid md:grid-cols-2 gap-8 mb-12">
                    <div class="bg-slate-50 p-6 rounded-2xl border-t-4 border-emerald-500 shadow-sm">
                        <h3 class="text-emerald-800 font-bold mb-3 flex items-center gap-2">
                             <svg class="w-5 h-5 text-emerald-600" fill="currentColor" viewBox="0 0 20 20"><path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"></path></svg>
                             Indikator Kinerja Utama (IKU)
                        </h3>
                        <p class="text-sm leading-relaxed text-gray-700 m-0">
                            Indikator Kinerja Utama (IKU) adalah ukuran keberhasilan dari suatu tujuan dan sasaran strategis operasional. Setiap lembaga atau Instansi pemerintah wajib merumuskan Indikator Kinerja Utama sebagai suatu prioritas program dan kegiatan yang mengacu pada sasaran strategis dalam RPJMD dan RENSTRA Satuan Kerja Perangkat Daerah. Indikator Kinerja Utama pada Unit Organisasi setingkat Eselon II/SKPD/Unit kerja mandiri sekurang-kurangnya adalah Indikator keluaran (Output) untuk mendukung pencapaian sasaran strategis.
                        </p>
                    </div>
                    <div class="bg-emerald-50 p-6 rounded-2xl border-t-4 border-emerald-600 shadow-sm">
                        <h3 class="text-emerald-900 font-bold mb-3 flex items-center gap-2">
                             <svg class="w-5 h-5 text-emerald-700" fill="currentColor" viewBox="0 0 20 20"><path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path></svg>
                             Indikator Kinerja Individu (IKI)
                        </h3>
                        <p class="text-sm leading-relaxed text-gray-700 m-0">
                            Sedangkan Indikator Kinerja Individu (IKI) adalah tingkat pencapaian atau hasil kerja seseorang dari sasaran tujuan yang harus dicapai organisasi dalam kurun waktu tertentu. Setiap lembaga atau Instansi pemerintah wajib merumuskan Indikator Kinerja Individu sebagai suatu prioritas program dan kegiatan yang mengacu pada sasaran strategis dalam RPJMD dan RENSTRA Satuan Kerja Perangkat Daerah.
                        </p>
                    </div>
                </div>

                <div class="flex items-center gap-4 mb-8">
                    <div class="w-12 h-12 rounded-2xl bg-emerald-100 flex items-center justify-center text-emerald-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800 m-0">Dokumen IKU dan IKI Dinas Perikanan</h2>
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
                                <td colspan="4" class="px-6 py-10 text-center text-gray-500 italic">Belum ada dokumen IKU dan IKI yang tersedia.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- Info Alert -->
                <div class="mt-10 bg-blue-50 border-l-4 border-blue-400 p-6 rounded-xl">
                    <div class="flex items-start gap-4">
                        <div class="text-blue-500">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-blue-700 text-sm font-medium m-0">
                                Klik tombol <strong>PDF</strong> pada tabel di atas untuk mengunduh dokumen resmi IKU dan IKI Dinas Perikanan Kabupaten Pamekasan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
