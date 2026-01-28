<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="@yield('meta_description', 'Website Resmi Dinas Perikanan Kabupaten Pamekasan. Informasi berita, galeri kegiatan, dan dokumen publik.')">
    <meta name="keywords"
        content="Dinas Perikanan, Pamekasan, Kelautan, Perikanan Tangkap, Perikanan Budidaya, Pelayanan, Pengawasan">
    <meta name="author" content="Diskan Pamekasan">
    <title>@yield('title', 'Dinas Perikanan Kabupaten Pamekasan')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <style>
        [x-cloak] {
            display: none !important;
        }

        body {
            font-family: 'Outfit', sans-serif;
        }
    </style>
</head>

<body class="bg-slate-50 text-slate-800 antialiased flex flex-col min-h-screen" x-data="{ loading: true }"
    x-init="setTimeout(() => loading = false, 2000)">

    <!-- Preloader -->
    <div x-show="loading" x-transition:leave="transition ease-in duration-700"
        x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-full"
        class="fixed inset-0 z-[100] flex flex-col items-center justify-center bg-white">

        <div class="relative flex flex-col items-center">
            <!-- Pulsing Logo -->
            <div class="relative w-32 h-32 mb-6">
                <div class="absolute inset-0 bg-emerald-100 rounded-full animate-ping opacity-75"></div>
                <div class="absolute inset-0 bg-emerald-50 rounded-full animate-pulse-slow"></div>
                <img src="{{ asset('images/logo-pamekasan.png') }}"
                    class="relative z-10 w-full h-full object-contain animate-float" alt="Preloader Logo">
            </div>

            <!-- Text Animation -->
            <div class="text-center space-y-2 overflow-hidden">
                <h1 class="text-2xl font-bold text-slate-800 tracking-widest uppercase" x-show="loading"
                    x-transition:enter="transition ease-out duration-1000 delay-300"
                    x-transition:enter-start="opacity-0 translate-y-10"
                    x-transition:enter-end="opacity-100 translate-y-0">
                    Dinas Perikanan
                </h1>
                <p class="text-sm font-medium text-emerald-600 tracking-[0.3em] uppercase" x-show="loading"
                    x-transition:enter="transition ease-out duration-1000 delay-500"
                    x-transition:enter-start="opacity-0 translate-y-10"
                    x-transition:enter-end="opacity-100 translate-y-0">
                    Kabupaten Pamekasan
                </p>
            </div>
        </div>
    </div>

    <x-navbar />

    <main class="flex-grow">
        @yield('content')
    </main>

    <x-footer />

    <script>
        document.addEventListener('DOMContentLoaded', function    () {
            AOS.init({
                duration: 800,
                once: true,
                offset: 100,
                easing: 'ease-out-cubic',
            });
        });
    </script>
</body>

</html>