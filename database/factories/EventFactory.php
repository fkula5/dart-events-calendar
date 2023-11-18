<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //$eventDate = fake()->dateTimeBetween("+1 week", "+1 week");
        return [
            'name' => fake()->sentence($nbWords = 3, $variableNbWords  = true),
            'description' => fake()->sentence($nbWords = 6, $variableNbWords = true),
            'venue_id' => fake()->numberBetween(1,10),
            'start_time' => fake()->dateTimeBetween("+1 week", "+2 week"),
            'finish_time' => fake()->dateTimeBetween("+1 week", "+2 week"),
            'created_by' => fake()->numberBetween(1,10)
        ];
    }
}
