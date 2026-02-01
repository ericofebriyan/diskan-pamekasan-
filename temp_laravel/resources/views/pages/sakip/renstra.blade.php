@extends('layouts.app')

@section('title', 'Renstra - Dinas Perikanan Pamekasan')

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
                Rencana Strategis <span class="text-emerald-400">(Renstra)</span>
            </h1>
            <p x-show="show" x-transition:enter="transition ease-out duration-700 delay-300"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                class="text-emerald-100 text-lg md:text-xl max-w-2xl mx-auto font-medium leading-relaxed">
                Amanat regulasi untuk perencanaan pembangunan jangka menengah yang strategis.
            </p>
        </div>
    </div>
</div>

<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 -mt-16 relative z-20 pb-20">
    <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border border-emerald-100">
        <div class="p-8 md:p-12">
            <div class="prose prose-emerald lg:prose-lg max-w-none text-gray-600">
                <div class="grid md:grid-cols-2 gap-8 mb-12">
                    <div class="bg-slate-50 p-6 rounded-2xl border-l-4 border-emerald-500 shadow-sm">
                        <p class="leading-relaxed italic text-gray-700 mb-0">
                            "Rencana Strategis didefinisikan sebagai upaya yang didisiplinkan untuk membuat keputusan dan tindakan penting yang membentuk dan membantu bagaimana menjadi organisasi, apa yang dikerjakan organisasi dan mengapa organisasi mengerjakan itu."
                        </p>
                        <footer class="mt-2 text-sm font-bold text-emerald-700">— Olsen dan Eadie (1982:hal.4)</footer>
                    </div>
                    <div class="bg-emerald-50 p-6 rounded-2xl border-l-4 border-emerald-600 shadow-sm">
                        <p class="leading-relaxed italic text-gray-700 mb-0">
                            "Perencanaan Strategis (Strategic Planning) adalah sebuah alat manajemen yang digunakan untuk mengelola kondisi saat ini untuk melakukan proyeksi kondisi pada masa depan, sehingga rencana strategis adalah sebuah petunjuk yang dapat digunakan organisasi dari kondisi saat ini untuk mereka bekerja menuju 5 sampai 10 tahun ke depan"
                        </p>
                        <footer class="mt-2 text-sm font-bold text-emerald-800">— Kerzner (2001)</footer>
                    </div>
                </div>

                <p class="leading-relaxed mb-10">
                    Penyusunan Rencana Strategis (Renstra) adalah merupakan amanat Undang-Undang No. 25 Tahun 2004 tentang Sistem Perencanaan Pembangunan Nasional. Pada undang-undang tersebut Bab V Pasal 15 disebutkan bahwa setiap Kepala Satuan kerja wajib menyiapkan rancangan Renstra sesuai dengan tugas pokok dan fungsinya.
                </p>

                <div class="flex items-center gap-4 mb-8">
                    <div class="w-12 h-12 rounded-2xl bg-emerald-100 flex items-center justify-center text-emerald-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800 m-0">Dokumen Renstra Dinas Perikanan</h2>
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
                                <td colspan="4" class="px-6 py-10 text-center text-gray-500 italic">Belum ada dokumen Renstra yang tersedia.</td>
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
                                Klik tombol <strong>PDF</strong> pada tabel di atas untuk mengunduh dokumen resmi Rencana Strategis (Renstra). Dokumen ini merupakan peta jalan pembangunan sektor perikanan jangka menengah.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
