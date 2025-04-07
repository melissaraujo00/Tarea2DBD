<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeatherStation extends Model
{
    /** @use HasFactory<\Database\Factories\WeatherStationFactory> */
    use HasFactory;
    public $timestamps = false;

    protected $fillable=[
        'station_name',
        'location',
        'latitude',
        'altitude',
        'installation_date',
        'state'
    ];

    public function climateRecords(){
        return $this->hasMany(ClimateRecord::class);
    }

    public function maintenances(){
        return $this->hasMany(Maintenance::class);
    }

    public function proximityComparisonsOrigin()
    {
        return $this->hasMany(ProximityStationComparison::class, 'origin_station_id');
    }

    public function proximityComparisonsNearby()
    {
        return $this->hasMany(ProximityStationComparison::class, 'nearby_station_id');
    }
}
