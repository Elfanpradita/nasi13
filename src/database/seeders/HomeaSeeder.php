<?php

namespace Database\Seeders;

use App\Models\Homea;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HomeaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Homea::create([
            'slogan' => 'Selamat Datang di Nasi Goreng',
            'judul' => 'Nasi Goreng Spesial',
            'desc' => 'Nikmati kelezatan nasi goreng kami yang dibuat dengan bahan-bahan segar dan resep rahasia.',
            'slogan2' => 'Makanan Favorit',
            'judul2' => 'Mie Goreng dan Bihun',
            'desc2' => 'Selain nasi goreng, kami juga menyediakan mie goreng dan bihun yang tak kalah lezatnya.',
            'image' => '/suki/img/about.jpg',
            'image1' => '/suki/img/carousel-1.jpg',
            'image2' => '/suki/img/carousel-2.jpg',
        ]);
    }
}
