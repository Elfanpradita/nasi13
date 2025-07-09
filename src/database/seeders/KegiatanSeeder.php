<?php

namespace Database\Seeders;

use App\Models\Kegiatan;
use Illuminate\Database\Seeder;

class KegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kegiatan::create([
            'ruang_id' => 1,           // Pastikan ruang dengan ID 1 sudah ada
            'pengajar_id' => 1,        // Pastikan pengajar dengan ID 1 sudah ada
            'event_course_id' => 1,    // Pastikan event_course dengan ID 1 sudah ada
            'nama' => 'Kegiatan Pembukaan Kelas Mandarin',
            'tanggal' => '2025-07-10',
            'start' => '2025-07-10',
            'end' => '2025-07-10',
        ]);
    }
}
