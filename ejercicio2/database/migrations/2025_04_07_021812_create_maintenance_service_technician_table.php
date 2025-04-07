<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Maintenance;
use App\Models\ServiceTechnician;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('maintenance_service_technician', function (Blueprint $table) {
            $table->foreignIdFor(Maintenance::class)->constrained();
            $table->foreignIdFor(ServiceTechnician::class)->constrained();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maintenance_service_technician');
    }
};
