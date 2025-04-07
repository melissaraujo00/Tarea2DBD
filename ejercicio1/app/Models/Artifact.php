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


    public function time()
    {
        return $this->belongsTo(Time::class);
    }
    public function material()
    {
        return $this->belongsTo(Material::class);
    }

    public function publication()
    {
        return $this->belongsTo(Publication::class);
    }
    public function exhibition()
    {
        return $this->belongsTo(Exhibition::class);
    }

    public function conservationTechnique()
    {
        return $this->belongsTo(ConservationTechnique::class);
    }

    public function datings()
    {
        return $this->hasMany(Dating::class);
    }

    public function excavation()
    {
        return $this->belongsTo(Excavation::class);
    }
}
