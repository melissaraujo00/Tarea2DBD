<?php

use App\Models\TypeMaintenance;
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
        Schema::create('maintenances', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(WeatherStation::class)->constrained();//id de la estacion climatica
            $table->foreignIdFor(TypeMaintenance::class)->constrained();//id del tipo de manteminiento a realizado
            $table->text('results');
            $table->date('maintenance_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maintenances');
    }
};
