@extends('layouts.app')

@section('title', 'Permohonan Informasi Publik')

@section('content')
    <div class="pt-24 pb-12 bg-emerald-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center" data-aos="fade-down">
            <h1 class="text-4xl font-bold text-white mb-4">Permohonan Informasi</h1>
            <p class="text-emerald-100 text-lg">Layanan Permohonan Informasi Publik Dinas Perikanan</p>
        </div>
    </div>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="bg-white rounded-xl shadow-lg p-8 md:p-12 border border-slate-100" data-aos="fade-up">
            <h2 class="text-2xl font-bold text-slate-800 mb-6 text-center">Formulir Pengajuan Informasi</h2>

            <form action="#" method="POST" class="space-y-6">
                <!-- Placeholder Form -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Nama Lengkap</label>
                        <input type="text"
                            class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:border-emerald-500 focus:ring-emerald-500"
                            placeholder="Nama Anda">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Email</label>
                        <input type="email"
                            class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:border-emerald-500 focus:ring-emerald-500"
                            placeholder="Email Anda">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">No. Telepon / WhatsApp</label>
                    <input type="tel"
                        class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:border-emerald-500 focus:ring-emerald-500"
                        placeholder="08xxxxxxxxx">
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Rincian Informasi yang Dibutuhkan</label>
                    <textarea rows="4"
                        class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:border-emerald-500 focus:ring-emerald-500"
                        placeholder="Jelaskan informasi yang Anda butuhkan..."></textarea>
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Tujuan Penggunaan Informasi</label>
                    <textarea rows="2"
                        class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:border-emerald-500 focus:ring-emerald-500"
                        placeholder="Tujuan penggunaan..."></textarea>
                </div>

                <div class="text-center pt-4">
                    <button type="submit"
                        class="bg-emerald-600 text-white px-8 py-3 rounded-lg font-bold text-lg hover:bg-emerald-700 transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        Kirim Permohonan
                    </button>
                    <p class="mt-4 text-xs text-slate-500">*Data Anda akan kami jaga kerahasiaannya sesuai ketentuan yang
                        berlaku.</p>
                </div>
            </form>
        </div>
    </div>
@endsection