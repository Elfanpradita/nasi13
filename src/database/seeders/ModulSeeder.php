<?php

namespace Database\Seeders;

use App\Models\Modul;
use Illuminate\Database\Seeder;

class ModulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Modul::create([
            'kegiatan_id' => 1, // Pastikan kegiatan dengan ID 1 sudah ada
            'title' => 'Pengenalan Bahasa Mandarin',
            'upload modul' => 'moduls/mandarin_intro.pdf',
        ]);
    }
}
