<?php

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
        Schema::create('proximity_station_comparisons', function (Blueprint $table) {
            $table->id();

            //estacion de origen
            $table->foreignId('origin_station_id')
            ->constrained('weather_stations')
            ->onDelete('cascade');
  
            // Estación cercana
            $table->foreignId('nearby_station_id')
            ->constrained('weather_stations')
            ->onDelete('cascade');

            $table->decimal('temperature_difference',5,2);
            $table->decimal('humidity_difference',5,2);
            $table->decimal('pressure_difference',5,2);
            $table->dateTime('date_comparison');

            $table->unique(['origin_station_id', 'nearby_station_id', 'date_comparison'], 'proximity_unique');
            
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proximity_station_comparisons');
    }
};
