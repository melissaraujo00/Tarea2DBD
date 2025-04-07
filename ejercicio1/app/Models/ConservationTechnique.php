<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConservationTechnique extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['name', 'description'];

    // Relación: Una tecnica de conservación puede aplicarse a muchos artifacts
    public function artifacts()
    {
        return $this->hasMany(Artifact::class);
    }
}
