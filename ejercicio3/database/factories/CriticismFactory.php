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
            'criticism' => $this->faker->optional()->paragraph(),  // Crítica opcional
            'rate' => $this->faker->numberBetween(1, 5) + $this->faker->randomFloat(1, 0, 0.9),  // Calificación con decimales
            'presentation_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
