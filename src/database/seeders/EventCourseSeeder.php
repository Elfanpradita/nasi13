<?php

namespace Database\Seeders;

use App\Models\EventCourse;
use Illuminate\Database\Seeder;

class EventCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EventCourse::create([
            'nomor_event_course' => 'EVT-202507-001',
            'name' => 'Kelas Intensif Bahasa Mandarin',
            'description' => 'Kelas 4 minggu untuk persiapan HSK 3.',
            'start' => '2025-07-10',
            'end' => '2025-08-07',
            'price' => '1500000',
            'employee_id' => 1, // Pastikan employee dengan ID 1 ada
        ]);
    }
}
