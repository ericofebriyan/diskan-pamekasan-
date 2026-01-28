@extends('layouts.app')

@section('title', 'Visi Misi - Dinas Perikanan Kabupaten Pamekasan')

@section('content')
    <div class="pt-24 pb-12 bg-emerald-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-bold text-white mb-4">Visi & Misi</h1>
            <p class="text-emerald-100 text-lg">Visi dan Misi Dinas Perikanan Kabupaten Pamekasan</p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-white rounded-lg shadow-sm p-8 min-h-[400px]">
            <div class="prose max-w-none text-gray-600">
                <h3 class="text-xl font-bold text-emerald-800 mb-4">Visi</h3>
                <p class="mb-8">"Terwujudnya Pamekasan Sejahtera..."</p>

                <h3 class="text-xl font-bold text-emerald-800 mb-4">Misi</h3>
                <ul class="list-disc pl-5 space-y-2">
                    <li>Meningkatkan kualitas sumber daya manusia kelautan dan perikanan.</li>
                    <li>Mengoptimalkan pengelolaan sumber daya kelautan dan perikanan secara berkelanjutan.</li>
                    <li>Dll.</li>
                </ul>
            </div>
        </div>
    </div>
@endsection