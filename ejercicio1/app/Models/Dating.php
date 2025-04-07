<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dating extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'artifact_id',
        'name'
    ];

    // Cada datacion pertenece a un artefacto
    public function artifact()
    {
        return $this->belongsTo(Artifact::class);
    }

    // Relacion muchos a muchos con metodos cientificos
    public function scientificMethods()
    {
        return $this->belongsToMany(
            ScientificMethod::class,
            'dating_scientific_methods'
        );
    }
}
