<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rehearsal extends Model
{
    /** @use HasFactory<\Database\Factories\RehearsalFactory> */
    use HasFactory;

    protected $fillable = [
        'date',
        'start_time',
        'musician_id',
        'musical_id',
        'rehearsal_chamber_id'
    ];

    //cada ensayo pertenece a un musica A UN distrito
    public function musical()
    {
        return $this->belongsTo(Musical::class);
    }

    public function musician()
    {
        return $this->belongsTo(Musician::class);
    }

    public function rehearsalChamber(){
        return $this->belongsTo(RehearsalChamber::class);
    }
}
