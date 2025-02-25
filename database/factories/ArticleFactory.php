<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence,
            'content' => fake()->realText(1500),
            'author_id' => fake()->numberBetween(1, 10),
            'published_at' => fake()->optional()->dateTime,
            'deleted_at' => fake()->optional()->dateTime,
        ];
    }
}
