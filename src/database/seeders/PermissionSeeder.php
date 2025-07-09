<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    public function run(): void
    {
        // Permissions untuk murid
        $muridPermissions = [
            'access_edu',

            'view_any_ruang',
            'view_ruang',

            'view_any_kegiatan',
            'view_kegiatan',

            'view_any_modul',
            'view_modul',

            'view_any_task',
            'view_task',

            'view_any_jawaban::task',
            'view_jawaban::task',
            'create_jawaban::task',
            'update_jawaban::task',
            'delete_jawaban::task',

            'view_any_absensi::siswa',
            'view_absensi::siswa',

            'view_any_sertifikat',
            'view_sertifikat',
        ];

        // Permissions untuk pengajar
        $pengajarPermissions = [
            'access_edu',

            'view_any_ruang',
            'view_ruang',

            'view_any_kegiatan',
            'view_kegiatan',
            'create_kegiatan',
            'update_kegiatan',
            'delete_kegiatan',

            'view_any_modul',
            'view_modul',
            'create_modul',
            'update_modul',
            'delete_modul',

            'view_any_task',
            'view_task',
            'create_task',
            'update_task',
            'delete_task',

            'view_any_jawaban::task',
            'view_jawaban::task',

            'view_any_absensi::siswa',
            'view_absensi::siswa',
            'create_absensi::siswa',
            'update_absensi::siswa',
            'delete_absensi::siswa',
        ];

        // Gabungkan semua permissions dan buat di database jika belum ada
        $allPermissions = array_unique(array_merge($muridPermissions, $pengajarPermissions));

        foreach ($allPermissions as $perm) {
            Permission::firstOrCreate(['name' => $perm]);
        }

        // Buat roles jika belum ada
        $murid = Role::firstOrCreate(['name' => 'murid']);
        $pengajar = Role::firstOrCreate(['name' => 'pengajar']);

        // Assign permissions ke masing-masing role
        $murid->syncPermissions($muridPermissions);
        $pengajar->syncPermissions($pengajarPermissions);
    }
}
