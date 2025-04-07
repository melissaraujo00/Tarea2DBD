<?php

namespace App\Models;

use App\Enums\LoanStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    /** @use HasFactory<\Database\Factories\LoanFactory> */
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'loan_date',
        'return_date',
        'instrument_id',
        'musician_id',
        'status'
    ];

    protected $casts = ['status'=> LoanStatusEnum::class];

    //cada prestamo pertenece a un musico
    public function musician()
    {
        return $this->belongsTo(Musician::class);
    }

    //cada prestamo pertenece a un instrumento
    public function instrument()
    {
        return $this->belongsTo(Instrument::class);
    }
}
