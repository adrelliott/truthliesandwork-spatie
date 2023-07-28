<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Episode>
 */
class EpisodeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'subtitle' => $this->faker->sentence(6),
            'slug' => $this->faker->unique()->slug(),
            'excerpt' => $this->faker->paragraph(3),
            'episode_number' => $this->faker->unique()->numberBetween(1, 100),
            'youtube_id' => $this->faker->word(),
            'megaphone_id' => $this->faker->word(),
            'thumbnail' => $this->faker->imageUrl(),
            'is_premium' => false,
            'author' => $this->faker->name(),
            'published_at' => $this->faker->date()
        ];
    }
}
