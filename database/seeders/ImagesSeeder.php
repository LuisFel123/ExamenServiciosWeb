<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Get all existing post IDs
        $postIds = DB::table('posts')->pluck('id');

        for ($i = 0; $i < 50; $i++) {

            $image = [
                'url' => $faker->imageUrl($width = 640, $height = 480),
                'post_id' => $postIds->random(),
            ];

            DB::table('images')->insert($image);
        }
    }
}
