<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dokumen;

class DokumenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 5; $i++) {
            Dokumen::create([
                'judul' => 'Peraturan Menteri Kelautan No. ' . ($i + 1),
                'file_path' => 'dokumen/sample.pdf',
                'deskripsi' => 'Dokumen resmi mengenai peraturan perikanan dan kelautan yang berlaku saat ini.',
            ]);
        }
    }
}
