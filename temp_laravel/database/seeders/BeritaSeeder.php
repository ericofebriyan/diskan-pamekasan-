<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Berita;
use Illuminate\Support\Str;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            Berita::create([
                'judul' => 'Berita Kegiatan Dinas ' . ($i + 1),
                'slug' => Str::slug('Berita Kegiatan Dinas ' . ($i + 1)),
                'konten' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'kategori' => ['Umum', 'Kegiatan', 'Pengumuman'][rand(0, 2)],
            ]);
        }
    }
}
