<?php

namespace Database\Seeders;

use App\Models\Karyawan;
use Illuminate\Database\Seeder;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Karyawan::create([
            'employee_id' => 1, // Pastikan employee dengan id 1 sudah ada
            'tanggal' => now()->toDateString(), // atau '2025-07-01'
            'status' => 'hadir',
            'keterangan' => 'Tepat waktu masuk kerja',
        ]);
    }
}
