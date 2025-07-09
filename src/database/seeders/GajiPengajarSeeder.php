<?php

namespace Database\Seeders;

use App\Models\GajiPengajar;
use Illuminate\Database\Seeder;

class GajiPengajarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GajiPengajar::create([
            'event_course_id' => 1,      // Pastikan event_course dengan ID 1 sudah ada
            'gaji_pokok' => '5000000',   // Contoh nominal gaji pokok
        ]);
    }
}
