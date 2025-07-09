<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create([
            'kegiatan_id' => 1, // Pastikan kegiatan dengan ID 1 sudah ada
            'title' => 'Latihan Menulis Karakter Mandarin',
            'description' => 'Siswa diminta menyalin 10 karakter Mandarin dasar ke dalam buku latihan.',
        ]);

        Task::create([
            'kegiatan_id' => 1,
            'title' => 'Membaca Teks Pendek',
            'description' => 'Bacalah teks pendek berbahasa Mandarin dan terjemahkan ke bahasa Indonesia.',
        ]);
    }
}
