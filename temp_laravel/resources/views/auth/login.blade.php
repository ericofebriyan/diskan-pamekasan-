<x-guest-layout>
    <div class="mb-10">
        <h3 class="text-2xl font-black text-slate-800 tracking-tight uppercase">Masuk</h3>
        <p class="text-sm text-slate-500 mt-1 leading-relaxed">Silakan masuk untuk melanjutkan ke dashboard pengelolaan data.</p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-6" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-6">
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

        <!-- Password -->
        <div class="space-y-1.5">
            <x-input-label for="password" value="Kata Sandi" class="text-xs font-black uppercase tracking-widest text-slate-400 pl-1" />
            <div class="relative group">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-400 group-focus-within:text-emerald-500 transition-colors">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" /></svg>
                </div>
                <x-text-input id="password" class="block w-full pl-11 py-3 bg-slate-50 border-slate-200 focus:bg-white transition-all"
                                type="password"
                                name="password"
                                required placeholder="••••••••" />
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me & Forgot Password -->
        <div class="flex items-center justify-between">
            <label for="remember_me" class="inline-flex items-center group cursor-pointer">
                <input id="remember_me" type="checkbox" class="w-4 h-4 rounded border-slate-300 text-emerald-600 shadow-sm focus:ring-emerald-500 transition-all cursor-pointer" name="remember">
                <span class="ms-2 text-sm text-slate-600 group-hover:text-emerald-600 transition-colors">Ingat saya</span>
            </label>

            @if (Route::has('password.request'))
                <a class="text-sm font-bold text-emerald-600 hover:text-emerald-700 hover:underline transition-all" href="{{ route('password.request') }}">
                    Lupa sandi?
                </a>
            @endif
        </div>

        <div class="pt-2">
            <x-primary-button class="w-full justify-center text-sm py-4">
                {{ __('Masuk Sekarang') }}
            </x-primary-button>
        </div>

        @if (Route::has('register'))
            <div class="mt-8 text-center bg-slate-50 rounded-2xl p-4 border border-slate-100">
                <span class="text-sm text-slate-500">Belum punya akun?</span>
                <a href="{{ route('register') }}" class="ms-1 text-sm font-black text-emerald-600 hover:text-emerald-700 transition-all uppercase tracking-widest">Daftar</a>
            </div>
        @endif
    </form>
</x-guest-layout>
