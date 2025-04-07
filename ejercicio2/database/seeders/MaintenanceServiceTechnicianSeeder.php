<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Maintenance;
use App\Models\ServiceTechnician;
use Illuminate\Support\Facades\DB;

class MaintenanceServiceTechnicianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Primero, aseguramos que existan registros de mantenimientos y técnicos
        // Si no tienes suficientes registros, puedes crearlos primero
        $maintenances = Maintenance::all();
        $technicians = ServiceTechnician::all();

        // Si no hay suficientes registros, crearemos más (opcional)
        if ($maintenances->count() < 10) {
            // Esto asume que tienes un factory para Maintenance
            Maintenance::factory(10)->create();
            $maintenances = Maintenance::all();
        }

        if ($technicians->count() < 5) {
            // Esto asume que tienes un factory para ServiceTechnician
            ServiceTechnician::factory(5)->create();
            $technicians = ServiceTechnician::all();
        }

        // Obtener IDs de mantenimientos y técnicos
        $maintenanceIds = $maintenances->pluck('id')->toArray();
        $technicianIds = $technicians->pluck('id')->toArray();

        // Array para mantener un registro de las relaciones ya creadas y evitar duplicados
        $existingRelations = [];

        // Crear 25 asignaciones aleatorias entre mantenimientos y técnicos
        for ($i = 0; $i < 25; $i++) {
            // Seleccionar aleatoriamente un mantenimiento y un técnico
            $maintenanceId = $maintenanceIds[array_rand($maintenanceIds)];
            $technicianId = $technicianIds[array_rand($technicianIds)];
            
            // Crear una clave única para esta relación
            $relationKey = $maintenanceId . '-' . $technicianId;
            
            // Verificar si esta relación ya existe
            if (!isset($existingRelations[$relationKey])) {
                // Registrar esta relación para evitar duplicados
                $existingRelations[$relationKey] = true;
                
                // Insertar en la tabla pivote
                DB::table('maintenance_service_technician')->insert([
                    'maintenance_id' => $maintenanceId,
                    'service_technician_id' => $technicianId,
                ]);
            } else {
                // Si ya existe esta relación, intentar de nuevo
                $i--;
            }
        }
    }
}
