<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-6 py-3 bg-emerald-700 border border-transparent rounded-xl font-bold text-xs text-white uppercase tracking-widest hover:bg-emerald-800 focus:bg-emerald-800 active:bg-emerald-900 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2 transition ease-in-out duration-150 shadow-lg hover:shadow-emerald-500/30 transform hover:-translate-y-0.5']) }}>
    {{ $slot }}
</button>
