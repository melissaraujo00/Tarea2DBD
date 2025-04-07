<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ServiceTechnician>
 */
class ServiceTechnicianFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::where('role_id', 5)->inRandomOrder()->first()->id, // Toma un usuario con role_id 5 que es el rol de los tecnicos
            'state' => $this->faker->boolean, 
        ];
    }
}
