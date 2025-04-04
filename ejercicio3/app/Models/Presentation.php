<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presentation extends Model
{
    /** @use HasFactory<\Database\Factories\PresentationFactory> */
    use HasFactory;

    protected $fillable = [
        'audience',
        'date',
        'musical_id'
    ];

    public function musical(){
        return $this->belongsTo(Musical::class);
    }

    // Presentation.php
    public function musicians()
    {
        return $this->belongsToMany(Musician::class);
    }

}
