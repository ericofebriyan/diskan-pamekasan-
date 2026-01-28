@extends('layouts.app')

@section('title', 'Maklumat Pelayanan - Dinas Perikanan Kabupaten Pamekasan')

@section('content')
    <div class="pt-24 pb-12 bg-emerald-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-bold text-white mb-4">Maklumat Pelayanan</h1>
            <p class="text-emerald-100 text-lg">Komitmen Kami Dalam Memberikan Pelayanan Terbaik</p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-white rounded-lg shadow-md p-8 md:p-12 relative overflow-hidden">
            <!-- Decorative elements -->
            <div class="absolute top-0 right-0 -mt-10 -mr-10 w-40 h-40 bg-emerald-50 rounded-full opacity-50 z-0"></div>
            <div class="absolute bottom-0 left-0 -mb-10 -ml-10 w-40 h-40 bg-emerald-50 rounded-full opacity-50 z-0"></div>

            <div class="relative z-10 text-center">
                <h2 class="text-3xl font-bold text-emerald-900 mb-8 border-b-2 border-emerald-100 pb-4 inline-block">
                    MAKLUMAT PELAYANAN</h2>

                <div class="prose prose-lg mx-auto text-slate-700 leading-relaxed font-medium italic">
                    <p class="mb-6 text-xl">"Dengan ini kami menyatakan sanggup menyelenggarakan pelayanan sesuai standar
                        pelayanan yang telah ditetapkan."</p>
                    <p class="text-xl">"Dan apabila tidak menepati janji, kami siap menerima sanksi sesuai peraturan
                        perundang-undangan yang berlaku."</p>
                </div>

                <div class="mt-12 flex flex-col items-center">
                    <p class="text-lg font-bold text-emerald-800 mb-2">KEPALA DINAS PERIKANAN</p>
                    <p class="text-lg font-bold text-emerald-800">KABUPATEN PAMEKASAN</p>
                </div>
            </div>
        </div>
    </div>
@endsection