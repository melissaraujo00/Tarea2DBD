<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musical extends Model
{
    /** @use HasFactory<\Database\Factories\MusicalFactory> */
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'name',
        'composer_id'
    ];

    //relacion de muchos a muchos
    public function instruments(){
        return $this->belongsToMany(Instrument::class, 'configurations')
                    ->withPivot('quantaty');;
    }

    //el musical tiene muchos ensayos
    public function rehearsals()
    {
        return $this->hasMany(Rehearsal::class);
    }

    public function presentations()
    {
        return $this->hasMany(Presentation::class);
    }
}
