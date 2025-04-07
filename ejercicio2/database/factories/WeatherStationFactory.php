<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WeatherStation>
 */
class WeatherStationFactory extends Factory
{
    
     
    public function definition()
    {
        return [
            'station_name' => $this->faker->unique()->word,  
            'location' => $this->faker->city,  
            'latitude' => $this->faker->latitude,  
            'altitude' => $this->faker->randomFloat(2, 0, 5000),  
            'installation_date' => $this->faker->date,  
            'state' => $this->faker->boolean,  
        ];
    }
}
