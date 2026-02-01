<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Kelola Dokumen') }}
            </h2>
            <a href="{{ route('admin.dokumen.create') }}" class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded-xl shadow-lg transition-all transform hover:scale-105">
                + Tambah Dokumen
            </a>
        </div>
    </x-slot>

    <div class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            @if(session('success'))
                <div class="bg-purple-100 border border-purple-400 text-purple-700 px-4 py-3 rounded-xl relative mb-4" role="alert">
                    <strong class="font-bold">Berhasil!</strong>
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-2xl border border-slate-100">
                <div class="p-6 text-gray-900">
                    <div class="overflow-x-auto">
                        <table class="min-w-full leading-normal">
                            <thead>
                                <tr>
                                    <th class="px-5 py-3 border-b-2 border-slate-100 bg-slate-50 text-left text-xs font-bold text-slate-600 uppercase tracking-wider">
                                        Judul Dokumen
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-slate-100 bg-slate-50 text-left text-xs font-bold text-slate-600 uppercase tracking-wider">
                                        Kategori
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-slate-100 bg-slate-50 text-left text-xs font-bold text-slate-600 uppercase tracking-wider">
                                        File
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-slate-100 bg-slate-50 text-center text-xs font-bold text-slate-600 uppercase tracking-wider">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($dokumen as $item)
                                    <tr class="hover:bg-slate-50 transition-colors">
                                        <td class="px-5 py-5 border-b border-slate-100 bg-white text-sm">
                                            <p class="text-slate-900 font-bold">{{ $item->judul }}</p>
                                            <p class="text-slate-500 text-xs">{{ $item->deskripsi ?? '-' }}</p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-slate-100 bg-white text-sm text-center">
                                            <span class="px-3 py-1 bg-emerald-100 text-emerald-700 rounded-full text-xs font-bold uppercase">
                                                {{ $item->kategori }}
                                            </span>
                                        </td>
                                        <td class="px-5 py-5 border-b border-slate-100 bg-white text-sm">
                                            <a href="{{ asset('storage/' . $item->file_path) }}" target="_blank" class="text-purple-600 hover:underline flex items-center gap-2">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                                </svg>
                                                Lihat File
                                            </a>
                                        </td>
                                        <td class="px-5 py-5 border-b border-slate-100 bg-white text-sm text-center">
                                            <div class="flex justify-center space-x-3">
                                                <a href="{{ route('admin.dokumen.edit', $item->id) }}" class="text-blue-600 hover:text-blue-900 font-bold">Edit</a>
                                                <form action="{{ route('admin.dokumen.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus dokumen ini?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-600 hover:text-red-900 font-bold">Hapus</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="px-5 py-10 border-b border-slate-100 bg-white text-center text-slate-500 italic">
                                            Belum ada dokumen yang diunggah.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        {{ $dokumen->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
