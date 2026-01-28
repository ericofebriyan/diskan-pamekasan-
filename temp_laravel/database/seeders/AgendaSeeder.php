<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Agenda;

class AgendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 5; $i++) {
            Agenda::create([
                'judul' => 'Sosialisasi Perikanan ' . ($i + 1),
                'tanggal' => now()->addDays($i * 3)->format('Y-m-d'),
                'lokasi' => 'Aula Dinas Perikanan',
                'deskripsi' => 'Sosialisasi mengenai teknis budidaya ikan lele bagi pemula.',
            ]);
        }
    }
}
