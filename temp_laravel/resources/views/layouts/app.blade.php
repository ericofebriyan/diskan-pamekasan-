<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', config('app.name', 'Dinas Perikanan Pamekasan'))</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{ asset('images/logo-pamekasan.png') }}">
    </head>
    <body class="font-sans antialiased" x-data="{ loaded: false }" x-init="setTimeout(() => loaded = true, 50)">
        <div class="min-h-screen bg-gray-50 transition-opacity duration-500 ease-out opacity-0"
             :class="loaded ? 'opacity-100' : 'opacity-0'">
            @include('layouts.navigation')

            <!-- Global Flash Messages (Toast Style) -->
            @if(session('success') || session('error'))
                <div x-data="{ show: true }" 
                     x-show="show" 
                     x-init="setTimeout(() => show = false, 5000)"
                     x-transition:enter="ease-out duration-300"
                     x-transition:enter-start="opacity-0 translate-x-8"
                     x-transition:enter-end="opacity-100 translate-x-0"
                     x-transition:leave="ease-in duration-200"
                     x-transition:leave-start="opacity-100 translate-x-0"
                     x-transition:leave-end="opacity-0 translate-x-8"
                     class="fixed top-24 right-4 z-[100] max-w-sm w-full px-4">
                    
                    @if(session('success'))
                        <div class="bg-white border-l-4 border-emerald-500 shadow-2xl rounded-2xl p-4 flex items-center justify-between border border-slate-100">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-emerald-100 rounded-full flex items-center justify-center text-emerald-600 mr-3 shrink-0">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div class="pr-4">
                                    <p class="text-sm font-bold text-slate-800">Berhasil!</p>
                                    <p class="text-xs text-slate-500">{{ session('success') }}</p>
                                </div>
                            </div>
                            <button @click="show = false" class="text-slate-400 hover:text-slate-600 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                            </button>
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="bg-white border-l-4 border-red-500 shadow-2xl rounded-2xl p-4 flex items-center justify-between border border-slate-100">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center text-red-600 mr-3 shrink-0">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div class="pr-4">
                                    <p class="text-sm font-bold text-slate-800">Oops!</p>
                                    <p class="text-xs text-slate-500">{{ session('error') }}</p>
                                </div>
                            </div>
                            <button @click="show = false" class="text-slate-400 hover:text-slate-600 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                            </button>
                        </div>
                    @endif
                </div>
            @endif

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow relative z-10">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot ?? '' }}
                @yield('content')
            </main>

            <!-- Footer -->
            <x-footer />
        </div>
    </body>
</html>
