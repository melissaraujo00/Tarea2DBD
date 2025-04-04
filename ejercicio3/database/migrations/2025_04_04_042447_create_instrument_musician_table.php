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
        Schema::create('instrument_musician', function (Blueprint $table) {
            $table->foreignIdFor(Musician::class)->constrained();
            $table->foreignIdFor(Instrument::class)->constrained();
            $table->enum('level', [ 'Principiante', 'Basico', 'Intermedio','Avanzado', 'Profesional','Maestro']);
            $table->boolean('is_orchestra');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instrument_musician');
    }
};
