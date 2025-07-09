<?php

namespace Database\Seeders;

use App\Models\PenggajianPengajar;
use Illuminate\Database\Seeder;

class PenggajianPengajarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PenggajianPengajar::create([
            'gaji_pengajar_id' => 1,    // Pastikan gaji_pengajar dengan ID 1 sudah ada
            'pengajar_id' => 1,          // Pastikan pengajar dengan ID 1 sudah ada
            'periode_awal' => '2025-06-01',
            'periode_akhir' => '2025-06-30',
            'total_pertemuan' => '12',
            'total_gaji' => '6000000',
            'tanggal_transfer' => '2025-07-05',
            'keterangan' => 'Gaji Juni 2025',
            'status' => 'approved',      // nilai bisa: pending, approved, rejected
        ]);
    }
}
