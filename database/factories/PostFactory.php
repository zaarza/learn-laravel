<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => $this->faker->sentence(mt_rand(3, 8)),
            "slug" => $this->faker->slug(),
            "category_id" => mt_rand(1, 3),
            "user_id" => mt_rand(1, 10),
            "excerpt" => $this->faker->paragraph(1),
            "body" => $this->faker->paragraph(mt_rand(5, 10))
        ];
    }
}
