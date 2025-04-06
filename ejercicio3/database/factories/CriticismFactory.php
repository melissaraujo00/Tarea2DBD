<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Criticism>
 */
class CriticismFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'criticism' => fake()->optional()->paragraph(), 
            'rate' => fake()->numberBetween(1, 5) + fake()->randomFloat(1, 0, 0.9),  // Calificación con decimales
            'presentation_id' => fake()->numberBetween(1, 10),
        ];
    }
}
