<x-guest-layout>
    <div class="mb-10">
        <h3 class="text-2xl font-black text-slate-800 tracking-tight uppercase">Daftar Akun</h3>
        <p class="text-sm text-slate-500 mt-1 leading-relaxed">Bergabunglah untuk akses penuh ke sistem informasi perikanan.</p>
    </div>

    <form method="POST" action="{{ route('register') }}" class="space-y-5">
        @csrf

        <!-- Name -->
        <div class="space-y-1.5">
            <x-input-label for="name" value="Nama Lengkap" class="text-xs font-black uppercase tracking-widest text-slate-400 pl-1" />
            <div class="relative group">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-400 group-focus-within:text-emerald-500 transition-colors">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                </div>
                <x-text-input id="name" class="block w-full pl-11 py-3 bg-slate-50 border-slate-200 focus:bg-white transition-all text-sm" type="text" name="name" :value="old('name')" required autofocus placeholder="Masukkan nama" />
            </div>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="space-y-1.5">
            <x-input-label for="email" value="Alamat Email" class="text-xs font-black uppercase tracking-widest text-slate-400 pl-1" />
            <div class="relative group">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-400 group-focus-within:text-emerald-500 transition-colors">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.206" /></svg>
                </div>
                <x-text-input id="email" class="block w-full pl-11 py-3 bg-slate-50 border-slate-200 focus:bg-white transition-all text-sm" type="email" name="email" :value="old('email')" required placeholder="email@contoh.com" />
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="space-y-1.5">
            <x-input-label for="password" value="Kata Sandi" class="text-xs font-black uppercase tracking-widest text-slate-400 pl-1" />
            <div class="relative group">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-400 group-focus-within:text-emerald-500 transition-colors">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" /></svg>
                </div>
                <x-text-input id="password" class="block w-full pl-11 py-3 bg-slate-50 border-slate-200 focus:bg-white transition-all text-sm"
                                type="password"
                                name="password"
                                required placeholder="Minimal 8 karakter" />
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="space-y-1.5">
            <x-input-label for="password_confirmation" value="Konfirmasi Sandi" class="text-xs font-black uppercase tracking-widest text-slate-400 pl-1" />
            <div class="relative group">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-400 group-focus-within:text-emerald-500 transition-colors">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
                </div>
                <x-text-input id="password_confirmation" class="block w-full pl-11 py-3 bg-slate-50 border-slate-200 focus:bg-white transition-all text-sm"
                                type="password"
                                name="password_confirmation" required placeholder="Ulangi kata sandi" />
            </div>
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="pt-4">
            <x-primary-button class="w-full justify-center text-sm py-4">
                {{ __('Daftar Sekarang') }}
            </x-primary-button>
        </div>

        <div class="mt-8 text-center bg-slate-50 rounded-2xl p-4 border border-slate-100">
            <span class="text-sm text-slate-500">Sudah punya akun?</span>
            <a href="{{ route('login') }}" class="ms-1 text-sm font-black text-emerald-600 hover:text-emerald-700 transition-all uppercase tracking-widest">Masuk</a>
        </div>
    </form>
</x-guest-layout>
