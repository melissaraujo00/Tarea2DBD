<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musician extends Model
{
    /** @use HasFactory<\Database\Factories\MusicianFactory> */
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name',
        'phone_number',
        'is_available'
    ];

    //El musico tiene muchos prestamos
    public function loans()
    {
        return $this->hasMany(Loan::class);
    }

    //relacion de muchos a muchos
    public function instruments(){
        return $this->belongsToMany(Instrument::class)
                    ->withPivot('level', 'is_orchestra');;
    }

    //el musico tiene muchos ensayos
    public function rehearsals()
    {
        return $this->hasMany(Rehearsal::class);
    }

    // Musician.php
public function presentations()
{
    return $this->belongsToMany(Presentation::class);
}

}
