<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Kelola Agenda') }}
            </h2>
            <a href="{{ route('admin.agenda.create') }}" class="bg-orange-600 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded-xl shadow-lg transition-all transform hover:scale-105">
                + Tambah Agenda
            </a>
        </div>
    </x-slot>

    <div class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            @if(session('success'))
                <div class="bg-orange-100 border border-orange-400 text-orange-700 px-4 py-3 rounded-xl relative mb-4" role="alert">
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
                                        Kegiatan
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-slate-100 bg-slate-50 text-left text-xs font-bold text-slate-600 uppercase tracking-wider">
                                        Waktu & Lokasi
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-slate-100 bg-slate-50 text-center text-xs font-bold text-slate-600 uppercase tracking-wider">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($agenda as $item)
                                    <tr class="hover:bg-slate-50 transition-colors">
                                        <td class="px-5 py-5 border-b border-slate-100 bg-white text-sm">
                                            <p class="text-slate-900 font-bold">{{ $item->judul }}</p>
                                            <p class="text-slate-500 text-xs">{{ $item->deskripsi ?? '-' }}</p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-slate-100 bg-white text-sm">
                                            <div class="flex flex-col gap-1">
                                                <span class="flex items-center text-slate-700 font-medium">
                                                    <svg class="w-4 h-4 mr-1 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                    </svg>
                                                    {{ $item->tanggal->format('d M Y') }}
                                                </span>
                                                <span class="flex items-center text-slate-500 text-xs">
                                                    <svg class="w-4 h-4 mr-1 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                    </svg>
                                                    {{ $item->lokasi }}
                                                </span>
                                            </div>
                                        </td>
                                        <td class="px-5 py-5 border-b border-slate-100 bg-white text-sm text-center">
                                            <div class="flex justify-center space-x-3">
                                                <a href="{{ route('admin.agenda.edit', $item->id) }}" class="text-blue-600 hover:text-blue-900 font-bold">Edit</a>
                                                <form action="{{ route('admin.agenda.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus agenda kegiatan ini?');">
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
                                            Belum ada agenda kegiatan.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        {{ $agenda->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
