<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'role_name' => 'Administrador',
        ]);

        Role::create([
            'role_name' => 'Reportero',
        ]);

        Role::create([
            'role_name' => 'Analista',
        ]);

        Role::create([
            'role_name' => 'Meteorólogo',
        ]);

        Role::create([
            'role_name' => 'Técnico en Mantenimiento',
        ]);
    }
}
