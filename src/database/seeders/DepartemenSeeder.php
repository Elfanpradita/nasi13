<?php

namespace Database\Seeders;

use App\Models\Departemen;
use Illuminate\Database\Seeder;

class DepartemenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Departemen::create([
            'branch_company_id' => 1, // Pastikan branch_company dengan id 1 sudah ada
            'name' => 'Human Resources',
            'description' => 'Departemen yang mengelola sumber daya manusia dan administrasi karyawan.',
        ]);

        Departemen::create([
            'branch_company_id' => 1,
            'name' => 'Finance',
            'description' => 'Departemen yang bertanggung jawab atas pengelolaan keuangan perusahaan.',
        ]);
    }
}
