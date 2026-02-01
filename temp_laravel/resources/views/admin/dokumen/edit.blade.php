<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Dokumen') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-2xl sm:rounded-3xl border border-emerald-100">
                <div class="p-8 md:p-10">
                    <form action="{{ route('admin.dokumen.update', $dokumen->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                        @csrf
                        @method('PUT')
                        
                        <div>
                            <x-input-label for="judul" :value="__('Judul Dokumen')" class="text-emerald-900 font-bold mb-2" />
                            <x-text-input id="judul" name="judul" type="text" class="mt-1 block w-full rounded-xl border-emerald-100 focus:border-emerald-500 focus:ring-emerald-500" :value="old('judul', $dokumen->judul)" required />
                            <x-input-error class="mt-2" :messages="$errors->get('judul')" />
                        </div>

                        <div>
                            <x-input-label for="kategori" :value="__('Kategori Dokumen')" class="text-emerald-900 font-bold mb-2" />
                            <select id="kategori" name="kategori" class="mt-1 block w-full rounded-xl border-emerald-200 focus:border-emerald-500 focus:ring-emerald-500 shadow-sm transition-all" required>
                                @php
                                    $categories = [
                                        'rka' => 'RKA (Rencana Kerja Anggaran)',
                                        'dpa' => 'DPA (Dokumen Pelaksanaan Anggaran)',
                                        'renstra' => 'Renstra',
                                        'renja' => 'Renja',
                                        'iku-iki' => 'IKU dan IKI',
                                        'perjanjian-kinerja' => 'Perjanjian Kinerja',
                                        'renaksi' => 'Renaksi',
                                        'lkjip' => 'LKJIP',
                                        'lra' => 'LRA',
                                        'lainnya' => 'Dokumen Lainnya',
                                    ];
                                @endphp
                                @foreach($categories as $value => $label)
                                    <option value="{{ $value }}" {{ old('kategori', $dokumen->kategori) == $value ? 'selected' : '' }}>
                                        {{ $label }}
                                    </option>
                                @endforeach
                            </select>
                            <x-input-error class="mt-2" :messages="$errors->get('kategori')" />
                        </div>

                        <div>
                            <x-input-label for="file_path" :value="__('File Dokumen (Kosongkan jika tidak ingin mengganti)')" class="text-emerald-900 font-bold mb-2" />
                            <div x-data="{ fileName: '' }" class="relative">
                                <label for="file_path" class="mt-1 flex flex-col justify-center items-center px-6 pt-5 pb-6 border-2 border-emerald-100 border-dashed rounded-2xl bg-emerald-50/50 hover:bg-emerald-100/50 hover:border-emerald-300 transition-all cursor-pointer group">
                                    <input id="file_path" name="file_path" type="file" class="hidden" @change="fileName = $event.target.files[0].name">
                                    
                                    <div class="space-y-1 text-center">
                                        <svg class="mx-auto h-12 w-12 text-emerald-400 group-hover:scale-110 transition-transform" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <div class="flex flex-col text-sm text-gray-600">
                                            <span class="font-bold text-emerald-600 group-hover:text-emerald-500">
                                                Klik untuk mengganti file
                                            </span>
                                            <p class="text-xs text-gray-500 mt-1">atau tarik dan lepas di sini</p>
                                        </div>
                                        <div class="mt-2 flex flex-col items-center gap-1">
                                            <p class="text-[10px] text-emerald-600 font-medium">
                                                File saat ini: <a href="{{ asset('storage/' . $dokumen->file_path) }}" target="_blank" class="underline hover:text-emerald-800">Lihat Dokumen</a>
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Selected File Preview -->
                                    <template x-if="fileName">
                                        <div class="mt-4 px-4 py-2 bg-emerald-100 text-emerald-800 text-xs font-bold rounded-full flex items-center gap-2">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path></svg>
                                            <span x-text="fileName"></span>
                                        </div>
                                    </template>
                                </label>
                            </div>
                            <x-input-error class="mt-2" :messages="$errors->get('file_path')" />
                        </div>

                        <div>
                            <x-input-label for="deskripsi" :value="__('Deskripsi Singkat')" class="text-emerald-900 font-bold mb-2" />
                            <textarea id="deskripsi" name="deskripsi" class="mt-1 block w-full rounded-xl border-emerald-100 focus:border-emerald-500 focus:ring-emerald-500" rows="3">{{ old('deskripsi', $dokumen->deskripsi) }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('deskripsi')" />
                        </div>

                        <div class="flex items-center justify-end gap-4 pt-4 border-t border-emerald-50">
                            <a href="{{ route('admin.dokumen.index') }}" class="text-sm text-gray-600 hover:text-emerald-600 font-medium">
                                {{ __('Batal') }}
                            </a>
                            <x-primary-button class="bg-emerald-600 hover:bg-emerald-700 shadow-lg shadow-emerald-200 py-3 px-8 rounded-xl ring-offset-2 focus:ring-2 focus:ring-emerald-500">
                                {{ __('Perbarui Dokumen') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
