<?php

namespace Database\Seeders;

use App\Models\Homeb;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HomebSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Homeb::create([
            'icon1' => 'fa fa-3x fa-graduation-cap text-primary mb-4',
            'isi1' => 'nasi goreng',
            'desc1' => 'Nasi goreng adalah makanan yang terbuat dari nasi yang digoreng dengan bumbu dan bahan tambahan seperti sayuran, daging, atau telur.',
            'icon2' => 'fa fa-3x fa-globe text-primary mb-4',
            'isi2' => 'mie goreng',
            'desc2' => 'Mie goreng adalah hidangan mie yang digoreng dengan bumbu dan bahan tambahan seperti sayuran, daging, atau telur.',
            'icon3' => 'fa fa-3x fa-home text-primary mb-4',
            'isi3' => 'bihun goreng',
            'desc3' => 'Bihun goreng adalah hidangan bihun yang digoreng dengan bumbu dan bahan tambahan seperti sayuran, daging, atau telur.',
            'icon4' => 'fa fa-3x fa-book-open text-primary mb-4',
            'isi4' => 'bihun rebus',
            'desc4' => 'Bihun rebus adalah hidangan bihun yang direbus dan biasanya disajikan dengan kuah atau sebagai bahan tambahan dalam sup.',
        ]);
    }
}
            // $table->string('icon1')->nullable();
            // $table->string('isi1')->nullable();
            // $table->string('desc1')->nullable();
            // $table->string('icon2')->nullable();
            // $table->string('isi2')->nullable();
            // $table->string('desc2')->nullable();
            // $table->string('icon3')->nullable();
            // $table->string('isi3')->nullable();
            // $table->string('desc3')->nullable(); ronaldo vs messi