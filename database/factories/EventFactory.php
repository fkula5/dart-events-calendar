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
        $eventDate = fake()->dateTime();
        return [
            'name' => fake()->sentence($nbWords = 3, $variableNbWords  = true),
            'description' => fake()->sentence($nbWords = 6, $variableNbWords = true),
            'venue_id' => fake()->numberBetween(1,10),
            'start_time' => $eventDate,
            'finish_time' => $eventDate,
            'created_by' => fake()->numberBetween(1,10)
        ];
    }
}
