<x-guest-layout>
    <div class="mb-10">
        <h3 class="text-2xl font-black text-slate-800 tracking-tight uppercase">Lupa Sandi?</h3>
        <p class="text-sm text-slate-500 mt-2 leading-relaxed">
            Jangan khawatir! Masukkan alamat email Anda dan kami akan mengirimkan tautan untuk mengatur ulang kata sandi Anda.
        </p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-6" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}" class="space-y-6">
        @csrf

        <!-- Email Address -->
        <div class="space-y-1.5">
            <x-input-label for="email" value="Alamat Email" class="text-xs font-black uppercase tracking-widest text-slate-400 pl-1" />
            <div class="relative group">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-400 group-focus-within:text-emerald-500 transition-colors">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.206" /></svg>
                </div>
                <x-text-input id="email" class="block w-full pl-11 py-3 bg-slate-50 border-slate-200 focus:bg-white transition-all" type="email" name="email" :value="old('email')" required autofocus placeholder="nama@email.com" />
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="pt-2">
            <x-primary-button class="w-full justify-center text-sm py-4">
                {{ __('Kirim Tautan Atur Ulang') }}
            </x-primary-button>
        </div>

        <div class="mt-8 text-center bg-slate-50 rounded-2xl p-4 border border-slate-100">
            <a href="{{ route('login') }}" class="text-sm font-black text-emerald-600 hover:text-emerald-700 transition-all uppercase tracking-widest flex items-center justify-center gap-2">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
                Kembali ke Masuk
            </a>
        </div>
    </form>
</x-guest-layout>
