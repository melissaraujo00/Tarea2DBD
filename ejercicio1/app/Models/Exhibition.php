<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exhibition extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['exhibition', 'date'];

    // Relacion muchos a muchos: Un mismo artifact puede estar en varias exhibiciones,
    // y una exhibicion puede mostrar varios artifacts.
    public function artifacts()
    {
        return $this->belongsToMany(Artifact::class, 'artifact_exhibition');
    }
}
