<?php

namespace Database\Seeders;

use App\Models\Ruang;
use Illuminate\Database\Seeder;

class RuangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ruang::create([
            'nomor_ruang' => 'R101',
            'branch_company_id' => 1, // Pastikan branch_company dengan ID 1 sudah ada
            'batch_id' => 1,
        ]);
    }
}
