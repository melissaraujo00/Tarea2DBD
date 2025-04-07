<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\WeatherStation;
use App\Models\TypeMaintenance;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Maintenance>
 */
class MaintenanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'weather_station_id' => WeatherStation::inRandomOrder()->first()->id,
            'type_maintenance_id' => TypeMaintenance::inRandomOrder()->first()->id, 
            'results' => $this->faker->paragraph, 
            'maintenance_date' => $this->faker->date, 
        ];
    }
}
