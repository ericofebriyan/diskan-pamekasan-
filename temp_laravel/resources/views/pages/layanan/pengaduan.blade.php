@extends('layouts.app')

@section('title', 'Pengaduan Online - Dinas Perikanan Kabupaten Pamekasan')

@section('content')
    <div class="pt-24 pb-12 bg-emerald-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-bold text-white mb-4">Pengaduan Online</h1>
            <p class="text-emerald-100 text-lg">Layanan Aspirasi dan Pengaduan Online Rakyat</p>
        </div>
    </div>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-white rounded-lg shadow-xl overflow-hidden">
            <div class="p-8 md:p-12">
                <div class="mb-8">
                    <h2 class="text-2xl font-bold text-slate-800 mb-2">Formulir Pengaduan</h2>
                    <p class="text-slate-600">Silakan lengkapi formulir di bawah ini untuk menyampaikan kritik, saran, atau
                        pengaduan Anda. Kerahasiaan identitas Anda terjamin.</p>
                </div>

                <form action="#" method="POST" class="space-y-6">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Nama -->
                        <div>
                            <label for="name" class="block text-sm font-medium text-slate-700 mb-1">Nama Lengkap</label>
                            <input type="text" name="name" id="name" required
                                class="w-full rounded-md border-slate-300 shadow-sm focus:border-emerald-500 focus:ring-emerald-500 transition-colors"
                                placeholder="Masukkan nama Anda">
                        </div>

                        <!-- Kontak -->
                        <div>
                            <label for="contact" class="block text-sm font-medium text-slate-700 mb-1">Nomor WhatsApp /
                                Email</label>
                            <input type="text" name="contact" id="contact" required
                                class="w-full rounded-md border-slate-300 shadow-sm focus:border-emerald-500 focus:ring-emerald-500 transition-colors"
                                placeholder="08xxxxxxxxx / email@example.com">
                        </div>
                    </div>

                    <!-- Kategori -->
                    <div>
                        <label for="category" class="block text-sm font-medium text-slate-700 mb-1">Kategori
                            Pengaduan</label>
                        <select name="category" id="category"
                            class="w-full rounded-md border-slate-300 shadow-sm focus:border-emerald-500 focus:ring-emerald-500">
                            <option value="pelayanan">Pelayanan Publik</option>
                            <option value="infrastruktur">Sarana & Prasarana</option>
                            <option value="pungli">Dugaan Pungli</option>
                            <option value="lainnya">Lainnya</option>
                        </select>
                    </div>

                    <!-- Pesan -->
                    <div>
                        <label for="message" class="block text-sm font-medium text-slate-700 mb-1">Isi Pengaduan</label>
                        <textarea name="message" id="message" rows="5" required
                            class="w-full rounded-md border-slate-300 shadow-sm focus:border-emerald-500 focus:ring-emerald-500 transition-colors"
                            placeholder="Jelaskan kronologi atau detail pengaduan Anda..."></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-4">
                        <button type="submit"
                            class="w-full md:w-auto px-8 py-3 bg-emerald-600 hover:bg-emerald-700 text-white font-bold rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                            Kirim Pengaduan
                        </button>
                    </div>
                </form>
            </div>
            <div class="bg-slate-50 px-8 py-6 border-t border-slate-200">
                <p class="text-sm text-slate-500 text-center">
                    Atau hubungi kami langsung melalui WhatsApp: <a href="https://wa.me/6281234567890"
                        class="text-emerald-600 font-semibold hover:underline">0812-3456-7890</a>
                </p>
            </div>
        </div>
    </div>
@endsection