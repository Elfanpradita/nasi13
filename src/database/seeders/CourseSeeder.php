<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::create([
            'title' => 'Web Design & Development Course for Beginners',
            'price' => 149.00,
            'image' => 'suki/img/course-1.jpg',
            'instructor' => 'John Doe',
            'duration' => '1.49 Hrs',
            'students' => 30,
            'rating' => 5.0,
            'reviews' => 123,
        ]);

        Course::create([
            'title' => 'Advanced JavaScript Mastery',
            'price' => 199.00,
            'image' => 'suki/img/course-2.jpg',
            'instructor' => 'Jane Smith',
            'duration' => '2.00 Hrs',
            'students' => 45,
            'rating' => 4.5,
            'reviews' => 87,
        ]);
            
        Course::create([
            'title' => 'Full Stack Laravel Bootcamp',
            'price' => 249.00,
            'image' => 'suki/img/course-3.jpg',
            'instructor' => 'Alex Johnson',
            'duration' => '3.20 Hrs',
            'students' => 60,
            'rating' => 4.8,
            'reviews' => 150,

        ]);
    }
}
