<?php

namespace Database\Seeders;

use App\Models\Penggajian;
use Illuminate\Database\Seeder;

class PenggajianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Penggajian::create([
            'employee_id' => 1, // Pastikan employee dengan id 1 sudah ada
            'periode_awal' => '2025-06-01',
            'periode_akhir' => '2025-06-30',
            'total_gaji' => '5000000',
            'tanggal_transfer' => '2025-07-01',
            'keterangan' => 'Gaji bulan Juni 2025',
            'status' => 'dibayar',
        ]);
    }
}
