<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use App\Models\Maintenance;
use App\Models\ServiceTechnician;

class MaintenanceServiceTechnicianFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'maintenance_id' => Maintenance::all()->random()->id,  // Obtiene un mantenimiento aleatorio
            'service_technician_id' => ServiceTechnician::all()->random()->id,  // Obtiene un técnico aleatorio
        ];
    }

    /**
     * Create the entries in the maintenance_service_technician table.
     *
     * @return void
     */
    
}
