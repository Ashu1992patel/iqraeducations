<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            'Deeniyat',
            'Language',
            'Foundation',
            'Preparation',
        ];

        foreach ($names as $key => $name) {
            $category = Category::create([
                'name' => $name,
                'description' => $name,
            ]);
        }
    }
}
