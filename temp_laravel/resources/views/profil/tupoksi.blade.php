@extends('layouts.app')

@section('title', 'Tupoksi - Dinas Perikanan Kabupaten Pamekasan')

@section('content')
    <div class="pt-24 pb-12 bg-emerald-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-bold text-white mb-4">Tugas Pokok & Fungsi</h1>
            <p class="text-emerald-100 text-lg">Tupoksi Dinas Perikanan Kabupaten Pamekasan</p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-white rounded-lg shadow-sm p-8 min-h-[400px]">
            <div class="prose max-w-none text-gray-600">
                <h3 class="text-xl font-bold text-emerald-800 mb-4">Tugas Pokok</h3>
                <p class="mb-6">Membantu Bupati melaksanakan urusan pemerintahan bidang kelautan dan perikanan yang menjadi
                    kewenangan daerah dan tugas pembantuan yang diberikan kepada daerah.</p>

                <h3 class="text-xl font-bold text-emerald-800 mb-4">Fungsi</h3>
                <ul class="list-disc pl-5 space-y-2">
                    <li>Perumusan kebijakan teknis di bidang kelautan dan perikanan.</li>
                    <li>Pelaksanaan kebijakan di bidang kelautan dan perikanan.</li>
                    <li>Pelaksanaan evaluasi dan pelaporan di bidang kelautan dan perikanan.</li>
                    <li>Pelaksanaan administrasi dinas.</li>
                    <li>Pelaksanaan fungsi lain yang diberikan oleh Bupati terkait dengan tugas dan fungsinya.</li>
                </ul>
            </div>
        </div>
    </div>
@endsection