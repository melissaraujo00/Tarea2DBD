<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Composer extends Model
{
    /** @use HasFactory<\Database\Factories\ComposerFactory> */
    use HasFactory;
    public $timestamps = false;
    protected $fillable= [
        'name'
    ];

}
