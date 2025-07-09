<?php

namespace Database\Seeders;

use App\Models\Abtpoint;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AbtpointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Abtpoint::create([
            'point' => 'ganteng',
        ]);
        Abtpoint::create([
            'point' => 'tampan',
        ]);
        Abtpoint::create([
            'point' => 'pemberani',
        ]);
        Abtpoint::create([
            'point' => 'jujur',
        ]);
        Abtpoint::create([
            'point' => 'baik',
        ]);
        Abtpoint::create([
            'point' => 'cerdas',
        ]);
    }
}
