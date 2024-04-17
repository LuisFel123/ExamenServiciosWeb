<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++) { 
            $user = [
                'name' => $faker->name(),
                'email' => $faker->unique()->safeEmail(), 
                'password' => Hash::make('secret'), 
                'remember_token' => Str::random(60), // Token aleatorio
            ];

            User::create($user);
        }
    }
}
