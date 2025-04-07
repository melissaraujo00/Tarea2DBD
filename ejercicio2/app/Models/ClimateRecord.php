<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClimateRecord extends Model
{
    /** @use HasFactory<\Database\Factories\ClimateRecordFactory> */
    use HasFactory;
    public $timestamps = false;

    protected $fillable=[
        'weather_station_id',
        'temperature',
        'humidity',
        'pressure',
        'measurement_start_time',
        'measurement_end_time',
        'measurement_date'
    ];

    public function weatherStation(){
        return $this->belongsTo(WeatherStation::class);
    }
}
