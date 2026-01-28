@extends('layouts.app')

@section('title', 'Layanan Balai Benih - Dinas Perikanan Kabupaten Pamekasan')

@section('content')
    <div class="pt-24 pb-12 bg-emerald-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-bold text-white mb-4">Balai Benih Ikan</h1>
            <p class="text-emerald-100 text-lg">Penyediaan Benih Ikan Unggul Untuk Masyarakat</p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-white rounded-lg shadow-md p-8">
            <div class="prose max-w-none text-slate-600">
                <h3 class="text-2xl font-bold text-emerald-800 mb-4">Tentang Balai Benih Ikan (BBI)</h3>
                <p class="mb-6">
                    BBI Dinas Perikanan Kabupaten Pamekasan bertugas menyediakan benih ikan air tawar yang berkualitas
                    kepada masyarakat pembudidaya. Kami menjamin kualitas induk dan benih yang dihasilkan melalui
                    penerapan Cara Pembenihan Ikan yang Baik (CPIB).
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 my-8">
                    <div>
                        <h4 class="text-xl font-bold text-emerald-700 mb-3">Komoditas Unggulan</h4>
                        <ul class="list-disc pl-5 space-y-2">
                            <li>Ikan Lele Mutiara</li>
                            <li>Ikan Nila Salin</li>
                            <li>Ikan Gurami</li>
                            <li>Ikan Bandeng</li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-emerald-700 mb-3">Prosedur Permohonan</h4>
                        <ol class="list-decimal pl-5 space-y-2">
                            <li>Mengajukan permohonan tertulis kepada Kepala Dinas.</li>
                            <li>Verifikasi ketersediaan stok oleh petugas BBI.</li>
                            <li>Penerbitan surat perintah penyaluran.</li>
                            <li>Pengambilan benih di lokasi BBI.</li>
                        </ol>
                    </div>
                </div>

                <div class="bg-emerald-50 border-l-4 border-emerald-500 p-4 mt-8">
                    <p class="font-semibold text-emerald-900">Lokasi:</p>
                    <p>Jl. Raya Teja No. 12, Pamekasan, Jawa Timur</p>
                    <p class="mt-2 text-sm text-emerald-700">*Menyediakan layanan konsultasi teknis budidaya gratis.</p>
                </div>
            </div>
        </div>
    </div>
@endsection