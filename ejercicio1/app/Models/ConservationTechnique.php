<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConservationTechnique extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['name', 'responsible_id', 'description'];

    // Relacion: Una tecnica de conservacion puede aplicarse a muchos artifacts
    public function artifacts()
    {
        return $this->hasMany(Artifact::class);
    }

    // Cada tecnica de conservacion pertenece a un responsable
    public function responsible()
    {
        return $this->belongsTo(Responsible::class);
    }
}
