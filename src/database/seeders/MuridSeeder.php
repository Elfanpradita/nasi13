<?php

namespace Database\Seeders;

use App\Models\Murid;
use Illuminate\Database\Seeder;

class MuridSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Murid::create([
            'user_id' => 1, // Pastikan user dengan ID 1 sudah ada
            'nama_lengkap' => 'Elfan Pradita Rusmin',
            'no_telepon' => '081234567890',
            'umur' => '19',
            'tempat_tanggal_lahir' => 'Jakarta, 1 Januari 2006',
            'alamat' => 'Jl. Mawar No. 45, Jakarta Selatan',
            'jenjang_pendidikan' => 'SMA',
        ]);
    }
}
