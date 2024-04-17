<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;



class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $userIds = DB::table('users')->pluck('id');

        for ($i = 0; $i < 50; $i++) {
            $post = [
                'title' => $faker->sentence(),
                'body' => $faker->paragraph(),
                'user_id' => $userIds->random(),
            ];

            DB::table('posts')->insert($post);
        }
    }
}
