<?php

namespace Database\Factories;

use App\Models\Flag;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Flag>
 */
class FlagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Flag::class;

    public function definition(): array
    {
        $color =  ['red', 'yellow', 'green', 'blue'];
        $priority = [1, 2, 3, 4];

        return [
            'color' => $this->faker->randomElement($color),
            'priority' => $this->faker->randomElement($priority),
        ];
    }
}
