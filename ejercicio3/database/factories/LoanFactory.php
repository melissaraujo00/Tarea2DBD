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
            'loan_date' => $this->faker->date(),
            'return_date' => $this->faker->optional()->date(),
            'instrument_id' => $this->faker->numberBetween(1, 18),
            'musician_id' => $this->faker->numberBetween(1, 20),
            'status' => $statuses[array_rand($statuses)],
        ];
    }
}
