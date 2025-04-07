<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    /** @use HasFactory<\Database\Factories\MaintenanceFactory> */
    use HasFactory;
    public $timestamps = false;

    protected $fillable=[
        'weather_station_id',
        'type_maintenance_id',
        'results',
        'maintenance_date'
    ];

    public function weatherStation()
    {
        return $this->belongsTo(WeatherStation::class);
    }

    public function typeMaintenance()
    {
        return $this->belongsTo(TypeMaintenance::class);
    }

    public function serviceTechnicians()
    {
        return $this->belongsToMany(ServiceTechnician::class,'maintenance_service_technicians');
    }
}
