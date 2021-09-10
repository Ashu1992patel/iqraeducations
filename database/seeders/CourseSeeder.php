<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses =[
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

        $categories =[1, 2, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1];

        foreach ($courses as $key => $course) {
            $course = Course::create([
                'name' => $course,
                'description' => $course,
                'category_id' => $categories[$key],
            ]);
        }
        
    }
}
