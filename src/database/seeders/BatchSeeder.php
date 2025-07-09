<?php

namespace Database\Seeders;

use App\Models\Batch;
use Illuminate\Database\Seeder;

class BatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Batch::create([
            'event_course_id' => 1, // Pastikan event_course dengan ID 1 sudah ada
            'name' => 'Batch Juli 2025',
            'kapasitas' => '25',
            'isFull' => false,
            'start_registration' => '2025-07-01',
            'end_registration' => '2025-07-09',
        ]);
    }
}
