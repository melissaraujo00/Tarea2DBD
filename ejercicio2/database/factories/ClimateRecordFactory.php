<?php

namespace Database\Factories;

use App\Models\ClimateRecord;
use App\Models\WeatherStation;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class ClimateRecordFactory extends Factory
{
    protected $model = ClimateRecord::class;  // Indica el modelo asociado a esta Factory

    public function definition()
    {
        return [
            'weather_station_id' => WeatherStation::all()->random()->id, 
            'temperature' => $this->faker->randomFloat(2, -30, 50), 
            'humidity' => $this->faker->randomFloat(2, 0, 100),
            'pressure' => $this->faker->randomFloat(2, 900, 999), 
            'measurement_start_time' => $this->faker->dateTimeThisYear(),
            'measurement_end_time' => $this->faker->dateTimeThisYear(), 
            'measurement_date' => $this->faker->date(), 
        ];
    }
}