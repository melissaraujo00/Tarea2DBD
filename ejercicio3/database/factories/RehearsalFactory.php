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
            'date' => $this->faker->date(),
            'start_time' => $this->faker->time(),
            'musician_id' => Musician::where('is_available', 0)->inRandomOrder()->first()->id,
            'musical_id' => $this->faker->numberBetween(1, 10),
            'rehearsal_chamber_id' => RehearsalChamber::where('is_available', 0)->inRandomOrder()->first()->id, 
        ];
    }
}
