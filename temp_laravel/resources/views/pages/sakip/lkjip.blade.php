@extends('layouts.app')

@section('title', 'Laporan Kinerja Instansi Pemerintah (LKjIP)')

@section('content')
    <div class="pt-28 pb-12 min-h-screen bg-slate-50 relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-96 bg-gradient-to-b from-indigo-50 to-transparent -z-10"></div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl md:text-4xl font-bold text-center text-slate-800 mb-10 font-outfit uppercase tracking-wide"
                data-aos="fade-down">
                Laporan Kinerja Instansi Pemerintah (LKjIP)
            </h1>

            <div class="mb-10 bg-white/60 backdrop-blur-md rounded-2xl shadow-sm border border-white/50 p-6 md:p-8 relative overflow-hidden"
                data-aos="fade-up">
                <div class="absolute left-0 top-0 bottom-0 w-1.5 bg-indigo-600 mt-6 mb-6 rounded-r-lg ml-0.5 md:ml-0"></div>
                <div class="pl-6 md:pl-8">
                    <p class="text-slate-700 leading-8 text-base md:text-lg mb-6 text-justify">
                        Laporan Kinerja Instansi Pemerintah (LKjIP) adalah wujud pertanggungjawaban pejabat instansi
                        pemerintah atas pelaksanaan tugas dan fungsinya dalam rangka pencapaian visi dan misi.
                    </p>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-sm border border-slate-100 overflow-hidden" data-aos="fade-up"
                data-aos-delay="200">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-indigo-600 text-white">
                                <th class="px-8 py-5 font-bold text-sm uppercase w-16 text-center">No.</th>
                                <th class="px-8 py-5 font-bold text-sm uppercase w-1/4">Tahun</th>
                                <th class="px-8 py-5 font-bold text-sm uppercase">Uraian</th>
                                <th class="px-8 py-5 font-bold text-sm uppercase w-32 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            <tr class="hover:bg-indigo-50 transition-colors">
                                <td class="px-8 py-6 text-center text-slate-500">1</td>
                                <td class="px-8 py-6 font-semibold">2023</td>
                                <td class="px-8 py-6 text-slate-600">Laporan Kinerja Tahun 2023</td>
                                <td class="px-8 py-6 text-center">
                                    <button class="text-indigo-600 hover:text-indigo-800 font-bold">Download</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection