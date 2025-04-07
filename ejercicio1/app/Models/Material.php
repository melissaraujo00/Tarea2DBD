<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['name'];

    // Relacion: Un material puede estar asociado a muchos artifacts
    public function artifacts()
    {
        return $this->hasMany(Artifact::class);
    }
}
