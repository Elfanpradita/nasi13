<?php

namespace Database\Seeders;

use App\Models\Employee; // ganti dengan nama model yang sesuai
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employee::create([
            'branch_company_id' => 1,  // Pastikan sudah ada branch_company dengan id 1
            'user_id' => 1,            // Pastikan sudah ada user dengan id 1
            'nama_lengkap' => 'Elfan Pradita',
            'no_telepon' => '081234567890',
            'jenis_kelamin' => 'L',
            'alamat' => 'Jl. Kebon Nanas No. 10, Jakarta',
        ]);
    }
}
