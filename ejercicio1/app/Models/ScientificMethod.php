<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScientificMethod extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['name', 'description'];

    public function datings()
    {
        return $this->belongsToMany(
            Dating::class,
            'dating_scientific_methods'
        );
    }
}
