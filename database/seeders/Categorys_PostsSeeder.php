<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class Categorys_PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $categoryIds = DB::table('categories')->pluck('id');
        $postIds = DB::table('posts')->pluck('id');

        for ($i = 0; $i < 100; $i++) { 

            $data = [
                'category_id' => $categoryIds->random(),
                'post_id' => $postIds->random(),
            ];

            DB::table('categorys_posts')->insert($data);
        }
    }
}
