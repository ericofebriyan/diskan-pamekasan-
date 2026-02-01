<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', config('app.name', 'Dinas Perikanan Pamekasan'))</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=plus-jakarta-sans:400,500,600,700&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{ asset('images/logo-pamekasan.png') }}">

        <style>
            .bg-pattern {
                background-color: #065f46;
                background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23059669' fill-opacity='0.15'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2v-4h4v-2h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2v-4h4v-2H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            }
        </style>
    </head>
    <body class="font-sans text-gray-900 antialiased" x-data="{ loaded: false }" x-init="setTimeout(() => loaded = true, 50)">
        <div class="min-h-screen flex items-center justify-center bg-pattern p-4 transition-opacity duration-700" :class="loaded ? 'opacity-100' : 'opacity-0'">
            <div class="w-full max-w-4xl flex flex-col md:flex-row bg-white/95 backdrop-blur-md shadow-2xl rounded-[32px] overflow-hidden">
                
                <!-- Left Side: Branding/Info -->
                <div class="md:w-1/2 bg-emerald-700 p-8 md:p-12 text-white flex flex-col justify-between relative overflow-hidden">
                    <!-- Background Accent -->
                    <div class="absolute top-0 right-0 -mr-16 -mt-16 w-64 h-64 bg-emerald-500/20 rounded-full blur-3xl"></div>
                    <div class="absolute bottom-0 left-0 -ml-16 -mb-16 w-64 h-64 bg-blue-500/20 rounded-full blur-3xl"></div>

                    <div class="relative z-10">
                        <a href="/" class="inline-block transition-transform hover:scale-105 duration-300">
                            <img src="{{ asset('images/logo-pamekasan.png') }}" class="h-20 w-auto filter drop-shadow-xl" alt="Logo Pamekasan">
                        </a>
                        <div class="mt-8">
                            <h2 class="text-3xl font-extrabold tracking-tight leading-tight">Dinas Perikanan<br><span class="text-emerald-300">Kabupaten Pamekasan</span></h2>
                            <p class="mt-4 text-emerald-100 leading-relaxed opacity-90">
                                Akses portal Satu Data dan Pelayanan Administrasi Dinas Perikanan Kabupaten Pamekasan.
                            </p>
                        </div>
                    </div>

                    <div class="mt-12 relative z-10 hidden md:block">
                        <div class="flex items-center gap-4 text-sm font-medium text-emerald-200/80">
                            <span class="flex items-center gap-1">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
                                Aman & Terenkripsi
                            </span>
                            <span class="w-1 h-1 bg-emerald-500 rounded-full"></span>
                            <span>v2.1.0</span>
                        </div>
                    </div>
                </div>

                <!-- Right Side: Form -->
                <div class="md:w-1/2 p-8 md:p-12 lg:p-16 flex flex-col justify-center">
                    <div class="mb-8">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
