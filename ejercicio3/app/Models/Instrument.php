<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Instrument extends Model
{
    protected $fillable = [
        'name'
    ];

    //El instrumento tiene muchos prestamos
    public function loans()
    {
        return $this->hasMany(Loan::class);
    }

    //relacion de muchos a muchos
    public function musicians(){
        return $this->belongsToMany(Musician::class, )
                    ->withPivot('level', 'is_orchestra');;
    }

    //relacion de muchos a muchos
    public function musicals(){
        return $this->belongsToMany(Musical::class, 'configurations')
                    ->withPivot('quantaty');;
    }
}
