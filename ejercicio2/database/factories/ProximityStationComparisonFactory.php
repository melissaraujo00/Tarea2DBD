<?php

namespace Database\Factories;

use App\Models\WeatherStation;
use App\Models\ProximityStationComparison;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProximityStationComparisonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        // Obtener todas las estaciones de clima
        $stations = WeatherStation::all();

        // Seleccionar aleatoriamente una estación de origen
        $originStation = $stations->random();

        // Seleccionar aleatoriamente una estación cercana, asegurándose de que no sea la estación de origen
        $nearbyStation = $stations->where('id', '!=', $originStation->id)->random();

        return [
            // Estación de origen
            'origin_station_id' => $originStation->id,

            // Estación cercana
            'nearby_station_id' => $nearbyStation->id,

            // Diferencias de valores (aleatorios en el rango que desees)
            'temperature_difference' => $this->faker->randomFloat(2, -10, 10),
            'humidity_difference' => $this->faker->randomFloat(2, -10, 10),
            'pressure_difference' => $this->faker->randomFloat(2, -10, 10),

            // Fecha de la comparación
            'date_comparison' => $this->faker->dateTimeThisDecade(),
        ];
    }
}
