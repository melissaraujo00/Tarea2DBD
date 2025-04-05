<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Loan>
 */
class LoanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $statuses = ['En préstamo',  'Devuelto', 'Retrasado', 'Perdido'];

        return [
            'loan_date' => fake()->date(),
            'return_date' => fake()->optional()->date(),
            'instrument_id' => fake()->numberBetween(1, 18),
            'musician_id' => fake()->numberBetween(1, 20),
            'status' => $statuses[array_rand($statuses)],
        ];
    }
}
