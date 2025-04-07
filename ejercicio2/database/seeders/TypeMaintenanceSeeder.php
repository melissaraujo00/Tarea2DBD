<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TypeMaintenance;

class TypeMaintenanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TypeMaintenance::create([
            'maintenance_name'=>'mantenimiento preventivo'
        ]);

        TypeMaintenance::create([
            'maintenance_name'=>'mantenimiento correctivo'
        ]);

        TypeMaintenance::create([
            'maintenance_name'=>'cambios de sensores'
        ]);

        TypeMaintenance::create([
            'maintenance_name'=>'limpiesa'
        ]);
    }
}
