<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RehearsalChamber>
 */
class RehearsalChamberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'capacity' => $this->faker->numberBetween(10, 200),
            'is_available' => $this->faker->boolean(),
        ];
    }
}
