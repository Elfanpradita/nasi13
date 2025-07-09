<?php

namespace Database\Seeders;

use App\Models\JawabanTask;
use Illuminate\Database\Seeder;

class JawabanTaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JawabanTask::create([
            'task_id' => 1,    // Pastikan task dengan ID 1 sudah ada
            'murid_id' => 1,   // Pastikan murid dengan ID 1 sudah ada
            'upload_task' => 'uploads/jawaban_task_1.pdf',
        ]);
    }
}
