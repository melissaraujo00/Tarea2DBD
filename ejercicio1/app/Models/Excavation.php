<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Excavation extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'name',
        'location',
        'description',
        'start_date',
        'end_date'
    ];

    // Una excavacion puede tener muchos artefactos
    public function artifacts()
    {
        return $this->hasMany(Artifact::class);
    }
}
