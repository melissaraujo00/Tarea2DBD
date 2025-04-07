<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['description', 'date'];

    // Relacion muchos a muchos: Un mismo artifact puede aparecer en varias publicaciones,
    // y una publicacion puede incluir varios artifacts.
    public function artifacts()
    {
        return $this->belongsToMany(Artifact::class, 'artifact_publication');
    }
}
