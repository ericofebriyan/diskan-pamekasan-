<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Galeri;

class GaleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 12; $i++) {
            Galeri::create([
                'judul' => 'Dokumentasi Kegiatan ' . ($i + 1),
                'deskripsi' => 'Deskripsi singkat mengenai kegiatan ini. Foto diambil pada saat acara berlangsung.',
                'gambar' => '',
            ]);
        }
    }
}
