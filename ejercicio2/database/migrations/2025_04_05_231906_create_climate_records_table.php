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
        Schema::create('climate_records', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(WeatherStation::class)->constrained();
            $table->decimal('temperature',5,2);
            $table->decimal('humidity',5,2);
            $table->decimal('pressure',5,2);
            $table->dateTime('measurement_start_time');
            $table->dateTime('measurement_end_time');
            $table->date('measurement_date');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('climate_records');
    }
};
