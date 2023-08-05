<?php

namespace Database\Factories;

use App\Models\User;
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
    public function definition()
    {
        return [
            'title' => fake()->sentence,
            'slug' => fake()->slug,
            'image' => fake()->imageUrl(),
            'post_meta' => $this->faker->paragraphs(rand(1, 2), true),
            'user_id' => User::all()->random()->id,
            'description' => $this->faker->paragraphs(rand(1, 5), true),
            'is_fetured' => rand(0,1),
            'status' => rand(0,1)

        ];
    }
}
