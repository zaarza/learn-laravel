<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Arzaqul Mughny',
            'username' => 'zaarza03',
            'email' => '1',
            'password' => bcrypt('1')
        ]);

        User::factory(3)->create();
        Post::factory(20)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Category::create([
            "name" => "Programming",
            "slug" => "programming",
        ]);

        Category::create([
            "name" => "Design",
            "slug" => "design",
        ]);

        Category::create([
            "name" => "Linux",
            "slug" => "linux",
        ]);
    }
}
