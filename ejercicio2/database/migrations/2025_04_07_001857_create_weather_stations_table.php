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
        Schema::create('weather_stations', function (Blueprint $table) {
            $table->id();
            $table->string('station_name',50)->unique();
            $table->string('location',50);
            $table->string('latitude',50);
            $table->decimal('altitude',12,2);
            $table->date('installation_date');
            $table->boolean('state')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weather_stations');
    }
};
