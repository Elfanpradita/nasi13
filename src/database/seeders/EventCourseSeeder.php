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
            'name' => 'Inggris',
            'description' => 'Belajar Inggris.',
            'start' => '2025-07-10',
            'end' => '2025-08-07',
            'price' => '1500000',
            'employee_id' => 1, // Pastikan employee dengan ID 1 ada
        ]);
        EventCourse::create([
            'nomor_event_course' => 'EVT-202507-002',
            'name' => 'Jepang',
            'description' => 'Belajar Jepang.',
            'start' => '2025-07-10',
            'end' => '2025-08-07',
            'price' => '1500000',
            'employee_id' => 1, // Pastikan employee dengan ID 1 ada
        ]);
        EventCourse::create([
            'nomor_event_course' => 'EVT-202507-003',
            'name' => 'Korea',
            'description' => 'Belajar Korea.',
            'start' => '2025-07-10',
            'end' => '2025-08-07',
            'price' => '1500000',
            'employee_id' => 1, // Pastikan employee dengan ID 1 ada
        ]);
    }
}
