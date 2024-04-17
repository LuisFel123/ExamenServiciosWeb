<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categorys = [
            [
                'name' => 'Programación',
            ],
            [
                'name' => 'Diseño',
            ],
            [
                'name' => 'Marketing',
            ],
        ];

        foreach ($categorys as $category) {
            Category::create($category);
        }
    }
}
