<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RehearsalChamber extends Model
{
    /** @use HasFactory<\Database\Factories\RehearsalChamberFactory> */
    use HasFactory;

    protected $fillable =
    [
        'name',
        'capacity',
        'is_available'
    ];

    //la sala tiene muchos ensayos
    public function rehearsals()
    {
        return $this->hasMany(Rehearsal::class);
    }
}
