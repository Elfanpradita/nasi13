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
            'kapasitas' => '30',
            'branch_company_id' => 1, // Pastikan branch_company dengan ID 1 sudah ada
        ]);

        Ruang::create([
            'nomor_ruang' => 'R102',
            'kapasitas' => '25',
            'branch_company_id' => 1,
        ]);
    }
}
