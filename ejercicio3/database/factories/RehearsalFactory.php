<?php

namespace Database\Factories;

use App\Models\Musician;
use App\Models\RehearsalChamber;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rehearsal>
 */
class RehearsalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date' => fake()->date(),
            'start_time' => fake()->time(),
            'musician_id' => Musician::where('is_available', 0)->inRandomOrder()->first()->id,
            'musical_id' => fake()->numberBetween(1, 10),
            'rehearsal_chamber_id' => RehearsalChamber::where('is_available', 0)->inRandomOrder()->first()->id,
        ];
    }
}
