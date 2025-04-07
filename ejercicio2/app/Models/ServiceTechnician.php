<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceTechnician extends Model
{
    /** @use HasFactory<\Database\Factories\ServiceTechnicianFactory> */
    use HasFactory;
    public $timestamps = false;

    protected $fillable=[
        'user_id',
        'state'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function serviceTechnicians()
    {
        return $this->belongsToMany(ServiceTechnician::class,'maintenance_service_technicians');
    }
}
