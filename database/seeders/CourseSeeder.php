<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;
use Faker;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = [
            'Nazira',
            'Urdu Language',
            'Arabic Grammer',
            'Hifz-e-Quran',
            'Qirat',
            'Darsh-e-Nizami',
            'Zanazah Managemnet',
            'Mufti',
            'Aqaid',
            'Taharat',
            'Hadees',
            'Tafsheer',
            'Daura-e-Hifz',
        ];

        $categories = [1, 2, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1];

        foreach ($courses as $key => $course) {
            $faker = Faker\Factory::create();

            $course = Course::create([
                'name' => $course,
                'description' => $faker->paragraph(5, true),
                'category_id' => $categories[$key],
            ]);

            $course->file()->create([
                'path' => 'frontend/images/courses/' . ++$key . '.jpg',
            ]);
        }
    }
}
