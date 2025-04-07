<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsible extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['name', 'description'];

    public function conservationTechniques()
    {
        return $this->hasMany(ConservationTechnique::class);
    }
}
