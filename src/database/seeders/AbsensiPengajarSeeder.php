<?php

namespace Database\Seeders;

use App\Models\AbsensiPengajar;
use Illuminate\Database\Seeder;

class AbsensiPengajarSeeder extends Seeder
{
    public function run(): void
    {
        AbsensiPengajar::create([
            'event_course_id' => 1,
            'kegiatan_id' => 1,
            'status' => 'hadir',
            'pengajar_id' => 1,
            'keterangan' => 'Hadir tepat waktu',
        ]);
    }
}
