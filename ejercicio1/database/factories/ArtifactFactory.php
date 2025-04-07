<?php

namespace Database\Factories;

use App\Models\ConservationTechnique;
use App\Models\Excavation;
use App\Models\Material;
use App\Models\Responsible;
use App\Models\Time;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Artifact>
 */
class ArtifactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'time_id' => fake()->numberBetween(1, 5),
            'material_id' =>fake()->numberBetween(1, 5),
            'name' => $this->faker->words(4, true),
            'publication_id' =>fake()->numberBetween(1, 5),
            'exhibition_id' =>fake()->numberBetween(1, 5),
            'conservation_technique_id' => fake()->numberBetween(1, 5),
            'excavation_id' => fake()->numberBetween(1, 5),
        ];
    }
}
