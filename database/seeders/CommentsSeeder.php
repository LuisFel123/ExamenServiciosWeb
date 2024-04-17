<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Get all existing post IDs
        $postIds = DB::table('posts')->pluck('id');

        for ($i = 0; $i < 100; $i++) { // Generate 100 comments (adjust as needed)

            $comment = [
                'text' => $faker->sentence(),
                'post_id' => $postIds->random(), // Choose a random post ID
            ];

            DB::table('comments')->insert($comment);
        }
    }
}
