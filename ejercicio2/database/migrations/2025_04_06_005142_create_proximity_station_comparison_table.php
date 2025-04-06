<?php

use App\Models\WeatherStation;
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
        //tabla intermedia para comparar datos de dos estaciones, en esta tabla se hace referencia a dos elementos de uan misma tabla
        Schema::create('proximity_station_comparison', function (Blueprint $table) {
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
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proximity_station_comparison');
    }
};
