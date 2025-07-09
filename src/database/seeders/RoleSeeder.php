<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        Role::firstOrCreate(['name' => 'murid']);
        Role::firstOrCreate(['name' => 'pengajar']);
        // tambahkan role lain di sini bila diperlukan
    }
}
