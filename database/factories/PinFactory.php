<?php

namespace Database\Factories;

use App\Models\Flag;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pin>
 */
class PinFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->text(50),
            'text' => fake()->text(500),
            'flag_id' =>  Flag::get()->random()->id,
        ];
    }
}
