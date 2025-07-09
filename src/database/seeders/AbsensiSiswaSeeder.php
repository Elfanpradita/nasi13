<?php

namespace Database\Seeders;

use App\Models\AbsensiSiswa;
use Illuminate\Database\Seeder;

class AbsensiSiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AbsensiSiswa::create([
            'kegiatan_id' => 1,  // Pastikan kegiatan dengan ID 1 sudah ada
            'murid_id' => 1,     // Pastikan murid dengan ID 1 sudah ada
            'status' => 'hadir',
            'keterangan' => 'Hadir tepat waktu',
        ]);
    }
}
