<?php

namespace Database\Factories;

use Illuminate\Support\Str;
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
        $title = $this->faker->realText(50);
        $thumbnail = $this->faker->imageUrl(1280, 720);
        $body = $this->faker->realText(2000);
        $active = $this->faker->boolean(70);
        $publishedAt = $this->faker->dateTimeBetween('-2 months', '+1 days');
        $userId = 1;

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'thumbnail' => $thumbnail,
            'body' => $body,
            'active' => $active,
            'published_at' => $publishedAt,
            'user_id' => $userId,
        ];
    }
}
