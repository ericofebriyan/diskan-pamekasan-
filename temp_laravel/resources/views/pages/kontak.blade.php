@extends('layouts.app')

@section('title', 'Kontak - Dinas Perikanan Kabupaten Pamekasan')

@section('content')
    <div class="pt-24 pb-12 bg-emerald-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-bold text-white mb-4">Hubungi Kami</h1>
            <p class="text-emerald-100 text-lg">Kontak dan Lokasi Dinas Perikanan Kabupaten Pamekasan</p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Contact Info -->
            <div class="bg-white rounded-lg shadow-sm p-8">
                <h3 class="text-2xl font-bold text-gray-800 mb-6">Informasi Kontak</h3>
                <ul class="space-y-4">
                    <li class="flex items-start">
                        <svg class="h-6 w-6 text-emerald-600 mt-1 mr-3" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <div>
                            <span class="block font-semibold text-gray-800">Alamat</span>
                            <span class="text-gray-600">Jl. Raya Pamekasan - Sumenep No. [Nomor], Pamekasan, Jawa
                                Timur</span>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <svg class="h-6 w-6 text-emerald-600 mt-1 mr-3" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <div>
                            <span class="block font-semibold text-gray-800">Telepon</span>
                            <span class="text-gray-600">(0324) XXXXXX</span>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <svg class="h-6 w-6 text-emerald-600 mt-1 mr-3" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <div>
                            <span class="block font-semibold text-gray-800">Email</span>
                            <span class="text-gray-600">diskan@pamekasankab.go.id</span>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Map -->
            <div class="bg-white rounded-lg shadow-sm p-4 h-96">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.6!2d113.4!3d-7.1!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zN8KwMDYnMDAuMCJTIDExM8KwMjQnMDAuMCJF!5e0!3m2!1sen!2sid!4v1600000000000!5m2!1sen!2sid"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
@endsection