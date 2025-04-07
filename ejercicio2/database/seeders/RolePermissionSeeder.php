<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;;
use App\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        $administrador = Role::where('role_name', 'Administrador')->first();
        $reportero = Role::where('role_name', 'Reportero')->first();
        $analista = Role::where('role_name', 'Analista')->first();
        $meteorologo = Role::where('role_name', 'Meteorólogo')->first();
        $tecnico = Role::where('role_name', 'Técnico en Mantenimiento')->first();

        // Obtener todos los permisos
        $verReportes = Permission::where('permission_name', 'ver reportes')->first();
        $crearReportes = Permission::where('permission_name', 'crear reportes')->first();
        $editarReportes = Permission::where('permission_name', 'editar reportes')->first();
        $eliminarReportes = Permission::where('permission_name', 'eliminar reportes')->first();
        $serviciosTecnicos = Permission::where('permission_name', 'sevicios tecnicos')->first();

        // Asignar permisos al rol Administrador (todos los permisos)
        $administrador->permissions()->attach([
            $verReportes->id,
            $crearReportes->id,
            $editarReportes->id,
            $eliminarReportes->id,
            $serviciosTecnicos->id,
        ]);

        // Asignar permisos al rol Reportero
        $reportero->permissions()->attach([
            $verReportes->id,
            $crearReportes->id,
            $editarReportes->id,
        ]);

        // Asignar permisos al rol Analista
        $analista->permissions()->attach([
            $verReportes->id,
        ]);

        // Asignar permisos al rol Meteorólogo
        $meteorologo->permissions()->attach([
            $verReportes->id,
            $crearReportes->id,
            $editarReportes->id,
        ]);

        // Asignar permisos al rol Técnico en Mantenimiento
        $tecnico->permissions()->attach([
            $verReportes->id,
            $serviciosTecnicos->id,
        ]);
    }
}
