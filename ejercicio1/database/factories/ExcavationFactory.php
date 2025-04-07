<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Excavation>
 */
class ExcavationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->words(4, true),
            'location' => fake()->address(),
            'description' => fake()->paragraph(),
            'start_date' => fake()->date(),
            'end_date' => fake()->date(),
        ];
    }
}
