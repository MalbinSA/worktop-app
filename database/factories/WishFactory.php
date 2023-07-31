<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Wish>
 */
class WishFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::get()->random()->id,
            'title' => fake()->text(60),
            'image' => fake()->image(),
            'description' => fake()->text('200'),
            'link' => fake()->url(),
            'price' => fake()->numerify(),
            'fulfilled' => fake()->boolean(),
        ];
    }
}
