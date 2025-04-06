<?php

use App\Models\Maintenance;
use App\Models\MaintenanceServiceTechnicians;
use App\Models\MaintenanceStaff;
use App\Models\ServiceTechnician;
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
        //tabla intermedia entre el personal de mantenimiento y los mantenimientos realizados
        Schema::create('maintenance_service_technicians', function (Blueprint $table) {
            $table->foreignIdFor(Maintenance::class)->constrained();
            $table->foreignIdFor(ServiceTechnician::class)->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maintenance_staff_maintenance');
    }
};
