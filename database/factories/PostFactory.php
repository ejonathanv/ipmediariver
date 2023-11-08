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

        $statuses = ['draft', 'published', 'archived'];
        $status = $statuses[array_rand($statuses)];

        $title = $this->faker->sentence;
        $coverImage = 'https://picsum.photos/900/600?random=' . $this->faker->numberBetween(1, 1000);

        return [
            'title' => $title,
            'resume' => $this->faker->paragraph,
            'body' => $this->faker->paragraph,
            'cover_image' => $coverImage,
            'category' => $this->faker->word,
            'author' => $this->faker->name,
            'published_at' => $this->faker->dateTime,
            'status' => $status,
            'slug' => \Str::slug($title),
        ];
    }
}
