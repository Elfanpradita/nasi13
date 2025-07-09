<?php

namespace Database\Seeders;

use App\Models\Pengajar;
use Illuminate\Database\Seeder;

class PengajarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pengajar::create([
            'user_id' => 1, // Pastikan user dengan id 1 sudah ada
            'departemen_id' => 1, // Pastikan departemen dengan id 1 sudah ada
            'no_telepon' => '081234567890',
            'jenjang_pendidikan' => 'S1 Pendidikan Bahasa Mandarin',
            'bidang_ajar' => 'Mandarin Dasar',
            'jenis_kelamin' => 'L',
            'alamat' => 'Jl. Kebon Nanas No. 10, Jakarta',
        ]);
    }
}
