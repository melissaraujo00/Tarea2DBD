<?php

use App\Models\Instrument;
use App\Models\Musician;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->date('loan_date');
            $table->date('return_date')->nullable();
            $table->foreignIdFor(Instrument::class)->constrained();
            $table->foreignIdFor(Musician::class)->constrained();
            $table->enum('status', ['En préstamo',  'Devuelto', 'Retrasado', 'Perdido']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
