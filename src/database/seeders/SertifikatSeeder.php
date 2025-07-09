<?php

namespace Database\Seeders;

use App\Models\Sertifikat;
use Illuminate\Database\Seeder;

class SertifikatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sertifikat::create([
            'kegiatan_id' => 1, // Pastikan kegiatan dengan ID 1 sudah ada
            'title' => 'Sertifikat Kelulusan Kelas Mandarin Dasar',
            'upload_sertifikat' => 'sertifikats/sertifikat_kelulusan_mandarin.pdf',
        ]);
    }
}
