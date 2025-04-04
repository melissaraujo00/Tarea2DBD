<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Criticism extends Model
{
    /** @use HasFactory<\Database\Factories\CriticismFactory> */
    use HasFactory;

    protected $fillable = [
        'criticism',
        'rate',
        'presentation_id'
    ];
}
