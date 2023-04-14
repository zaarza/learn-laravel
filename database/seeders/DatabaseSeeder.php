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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            "name" => "Udin",
            "email" => "udin@email.com",
            "password" => bcrypt("12345678")
        ]);

        User::create([
            "name" => "Edo",
            "email" => "edo@email.com",
            "password" => bcrypt("12345678")
        ]);

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

        Post::create([
            "title" => "Opini Saya Mengenai TailwindCSS",
            "slug" => "opini-mengenai-tailwindcss",
            "category_id" => 1,
            "user_id" => 1,
            "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore laborum nesciunt sint esse est amet voluptates debitis, sequi consequatur, veniam at sunt beatae alias nisi et non assumenda optio distinctio obcaecati cupiditate qui suscipit?",
            "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore laborum nesciunt sint esse est amet voluptates debitis, sequi consequatur, veniam at sunt beatae alias nisi et non assumenda optio distinctio obcaecati cupiditate qui suscipit?</p><p>Neque cumque similique veniam provident illo accusantium velit recusandae dolore, ex dignissimos blanditiis autem ducimus suscipit magni et ipsum voluptatem reiciendis? Quas ab iusto corrupti ut, eveniet similique tempora ducimus dignissimos dolor adipisci corporis voluptatum harum pariatur culpa magnam ea amet ex consequatur sit ad fuga dolores blanditiis ipsam. Corporis, doloribus voluptatum distinctio possimus dolore ab perferendis autem, officiis ratione velit et veritatis soluta deserunt quisquam.</p>"
        ]);

        Post::create([
            "title" => "Mengenal Components pada Figma",
            "slug" => "mengenal-components-figma",
            "category_id" => 2,
            "user_id" => 1,
            "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore laborum nesciunt sint esse est amet voluptates debitis, sequi consequatur, veniam at sunt beatae alias nisi et non assumenda optio distinctio obcaecati cupiditate qui suscipit?",
            "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore laborum nesciunt sint esse est amet voluptates debitis, sequi consequatur, veniam at sunt beatae alias nisi et non assumenda optio distinctio obcaecati cupiditate qui suscipit?</p><p>Neque cumque similique veniam provident illo accusantium velit recusandae dolore, ex dignissimos blanditiis autem ducimus suscipit magni et ipsum voluptatem reiciendis? Quas ab iusto corrupti ut, eveniet similique tempora ducimus dignissimos dolor adipisci corporis voluptatum harum pariatur culpa magnam ea amet ex consequatur sit ad fuga dolores blanditiis ipsam. Corporis, doloribus voluptatum distinctio possimus dolore ab perferendis autem, officiis ratione velit et veritatis soluta deserunt quisquam.</p>"
        ]);

        Post::create([
            "title" => "Install LAMP Stack di Ubuntu",
            "slug" => "install-lamp-stack-ubuntu",
            "category_id" => 3,
            "user_id" => 2,
            "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore laborum nesciunt sint esse est amet voluptates debitis, sequi consequatur, veniam at sunt beatae alias nisi et non assumenda optio distinctio obcaecati cupiditate qui suscipit?",
            "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore laborum nesciunt sint esse est amet voluptates debitis, sequi consequatur, veniam at sunt beatae alias nisi et non assumenda optio distinctio obcaecati cupiditate qui suscipit?</p><p>Neque cumque similique veniam provident illo accusantium velit recusandae dolore, ex dignissimos blanditiis autem ducimus suscipit magni et ipsum voluptatem reiciendis? Quas ab iusto corrupti ut, eveniet similique tempora ducimus dignissimos dolor adipisci corporis voluptatum harum pariatur culpa magnam ea amet ex consequatur sit ad fuga dolores blanditiis ipsam. Corporis, doloribus voluptatum distinctio possimus dolore ab perferendis autem, officiis ratione velit et veritatis soluta deserunt quisquam.</p>"
        ]);
    }
}
