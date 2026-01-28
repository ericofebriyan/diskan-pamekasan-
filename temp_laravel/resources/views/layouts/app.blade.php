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

    <style>
        body {
            font-family: 'Outfit', sans-serif;
        }
    </style>
</head>

<body class="bg-slate-50 text-slate-800 antialiased flex flex-col min-h-screen">

    <x-navbar />

    <main class="flex-grow">
        @yield('content')
    </main>

    <x-footer />

</body>

</html>