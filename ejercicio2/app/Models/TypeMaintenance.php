<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeMaintenance extends Model
{
    /** @use HasFactory<\Database\Factories\TypeMaintenanceFactory> */
    use HasFactory;
    public $timestamps = false;

    protected $fillable=[
        'maintenance_name'
    ];

    public function maintenances(){
        return $this->hasMany(Maintenance::class,'');
    }
}
