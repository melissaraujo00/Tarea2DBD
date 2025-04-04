<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Presentation>
 */
class PresentationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'audience' => $this->faker->numberBetween(50, 500),
            'date' => $this->faker->date(),
            'musical_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
