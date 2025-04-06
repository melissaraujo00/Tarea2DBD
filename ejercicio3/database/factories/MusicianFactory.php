<?php

namespace Database\Factories;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Musician>
 */
class MusicianFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => Str::limit(fake()->name(), 50),
            'phone_number' => fake()->phoneNumber(),
            'is_available' => fake()->boolean(),
        ];
    }
}
