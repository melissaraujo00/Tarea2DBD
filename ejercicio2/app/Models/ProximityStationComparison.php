<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProximityStationComparison extends Model
{
    /** @use HasFactory<\Database\Factories\ProximityStationComparisonFactory> */
    use HasFactory;

   
    public $timestamps = false;

      protected $fillable = [
          'origin_station_id',
          'nearby_station_id',
          'temperature_difference',
          'humidity_difference',
          'pressure_difference',
          'date_comparison'
      ];
  
      // Definir las relaciones con las estaciones meteorológicas (con la misma tabla)
      
      // Estación de origen
      public function originStation()
      {
          return $this->belongsTo(WeatherStation::class, 'origin_station_id');
      }
  
      // Estación cercana
      public function nearbyStation()
      {
          return $this->belongsTo(WeatherStation::class, 'nearby_station_id');
      }
}
