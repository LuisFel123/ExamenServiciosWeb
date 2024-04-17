<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(UsersSeeder::class);
        $this->call(PostsSeeder::class);
        $this->call(ImagesSeeder::class);
        $this->call(CommentsSeeder::class);
        $this->call(CategorysSeeder::class);
        $this->call(Categorys_PostsSeeder::class);






    }
}
