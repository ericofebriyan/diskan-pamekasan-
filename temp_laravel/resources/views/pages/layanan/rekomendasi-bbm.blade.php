@extends('layouts.app')

@section('title', 'Rekomendasi BBM - Dinas Perikanan Kabupaten Pamekasan')

@section('content')
    <div class="pt-24 pb-12 bg-emerald-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-bold text-white mb-4">Rekomendasi BBM Bersubsidi</h1>
            <p class="text-emerald-100 text-lg">Dukungan Operasional Bagi Nelayan Kecil</p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-white rounded-lg shadow-md p-8">
            <div class="flex flex-col md:flex-row gap-8">
                <div class="md:w-1/2">
                    <h3 class="text-2xl font-bold text-emerald-800 mb-4">Deskripsi Layanan</h3>
                    <p class="text-slate-600 mb-4">
                        Layanan penerbitan surat rekomendasi pembelian Bahan Bakar Minyak (BBM) jenis tertentu/khusus
                        penugasan untuk kebutuhan sarana perikanan tangkap (nelayan).
                    </p>
                    <h4 class="text-lg font-bold text-emerald-700 mb-2">Persyaratan Pengajuan:</h4>
                    <ul class="list-disc list-inside text-slate-600 space-y-1">
                        <li>Fotokopi KTP Pemohon</li>
                        <li>Fotokopi Kartu Kusuka</li>
                        <li>Pas Kecil Kapal</li>
                        <li>Estimasi Kebutuhan BBM</li>
                        <li>Surat Kuasa (jika diwakilkan)</li>
                    </ul>
                </div>
                <div class="md:w-1/2 bg-yellow-50 p-6 rounded-lg border border-yellow-200">
                    <h3 class="text-xl font-bold text-yellow-800 mb-4">Alur Pelayanan (30 Menit - 1 Jam)</h3>
                    <div class="relative border-l-2 border-yellow-300 ml-3 pl-6 space-y-6">
                        <div class="relative">
                            <span
                                class="absolute -left-[31px] bg-yellow-500 h-4 w-4 rounded-full border-2 border-white"></span>
                            <h5 class="font-bold text-slate-800">1. Pengajuan Berkas</h5>
                            <p class="text-sm text-slate-600">Nelayan menyerahkan berkas persyaratan di loket pelayanan.</p>
                        </div>
                        <div class="relative">
                            <span
                                class="absolute -left-[31px] bg-yellow-500 h-4 w-4 rounded-full border-2 border-white"></span>
                            <h5 class="font-bold text-slate-800">2. Verifikasi</h5>
                            <p class="text-sm text-slate-600">Petugas memeriksa kelengkapan dan kebenaran data.</p>
                        </div>
                        <div class="relative">
                            <span
                                class="absolute -left-[31px] bg-yellow-500 h-4 w-4 rounded-full border-2 border-white"></span>
                            <h5 class="font-bold text-slate-800">3. Penerbitan Rekomendasi</h5>
                            <p class="text-sm text-slate-600">Kepala Dinas menyetujui dan menandatangani surat rekomendasi.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection