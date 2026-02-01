<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Kelola Galeri Foto') }}
            </h2>
            <a href="{{ route('admin.galeri.create') }}" class="bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-2 px-4 rounded-xl shadow-lg transition-all transform hover:scale-105">
                + Tambah Foto
            </a>
        </div>
    </x-slot>

    <div class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            @if(session('success'))
                <div class="bg-emerald-100 border border-emerald-400 text-emerald-700 px-4 py-3 rounded-xl relative mb-4" role="alert">
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
                                        Gambar
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-slate-100 bg-slate-50 text-left text-xs font-bold text-slate-600 uppercase tracking-wider">
                                        Judul
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-slate-100 bg-slate-50 text-left text-xs font-bold text-slate-600 uppercase tracking-wider">
                                        Deskripsi
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-slate-100 bg-slate-50 text-center text-xs font-bold text-slate-600 uppercase tracking-wider">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($galeri as $item)
                                    <tr class="hover:bg-slate-50 transition-colors">
                                        <td class="px-5 py-5 border-b border-slate-100 bg-white text-sm">
                                            @if($item->gambar)
                                                <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" class="w-16 h-16 object-cover rounded-lg shadow-sm">
                                            @else
                                                <span class="text-slate-400 italic">No Image</span>
                                            @endif
                                        </td>
                                        <td class="px-5 py-5 border-b border-slate-100 bg-white text-sm">
                                            <p class="text-slate-900 font-bold">{{ $item->judul }}</p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-slate-100 bg-white text-sm">
                                            <p class="text-slate-600 line-clamp-2">{{ $item->deskripsi ?? '-' }}</p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-slate-100 bg-white text-sm text-center">
                                            <div class="flex justify-center space-x-3">
                                                <a href="{{ route('admin.galeri.edit', $item->id) }}" class="text-blue-600 hover:text-blue-900 font-bold">Edit</a>
                                                <form action="{{ route('admin.galeri.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus foto dari galeri?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-600 hover:text-red-900 font-bold">Hapus</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="px-5 py-10 border-b border-slate-100 bg-white text-center text-slate-500 italic">
                                            Belum ada foto dalam galeri.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        {{ $galeri->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
