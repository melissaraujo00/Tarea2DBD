<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['name'];

    public function artifacts()
    {
        return $this->hasMany(Artifact::class);
    }
}
