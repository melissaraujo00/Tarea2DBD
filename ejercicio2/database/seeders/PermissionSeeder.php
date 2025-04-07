<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create([
            'permission_name' => 'ver reportes',
            'description' => 'Permiso para ver los reportes',
        ]);

        Permission::create([
            'permission_name' => 'crear reportes',
            'description' => 'Permiso para crear nuevos reportes',
        ]);

        Permission::create([
            'permission_name' => 'editar reportes',
            'description' => 'Permiso para editar reportes existentes',
        ]);

        Permission::create([
            'permission_name' => 'eliminar reportes',
            'description' => 'Permiso para eliminar reportes',
        ]);

        Permission::create([
            'permission_name' => 'sevicios tecnicos',
            'description' => 'Permiso para realizar mantenimientos',
        ]);

    }
}
