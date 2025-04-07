<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artifact extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'excavation_id',
        'time_id',
        'material_id',
        'conservation_technique_id',
        'responsible_id',
        'description',
        'entry_date'
    ];

    // Relaciones con las otras tablas
    public function excavation()
    {
        return $this->belongsTo(Excavation::class);
    }

    public function time()
    {
        return $this->belongsTo(Time::class);
    }

    public function material()
    {
        return $this->belongsTo(Material::class);
    }

    public function conservationTechnique()
    {
        return $this->belongsTo(ConservationTechnique::class);
    }

    public function responsible()
    {
        return $this->belongsTo(Responsible::class);
    }

    // Un artefacto puede tener muchas dataciones
    public function datings()
    {
        return $this->hasMany(Dating::class);
    }
}
