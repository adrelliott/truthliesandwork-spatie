<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guest>
 */
class GuestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'slug' => $this->faker->unique()->slug(),
            'job_title' => $this->faker->jobTitle(),
            'profile_photo_path' => $this->faker->imageUrl(),
            'company_name' => $this->faker->company(),
            'company_website' => $this->faker->domainName(),
            'email' => $this->faker->email(),
            // 'social_links' => $this->faker->word(),
        ];
    }
}
