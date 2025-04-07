<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'role_id',
        'name',
        'last_name',
        'telephone',
    ];

    public function role(){
        return $this->belongsTo(Role::class);
    }

    public function serviceTechnician(){
        return $this->hasOne(ServiceTechnician::class);
    }
}
