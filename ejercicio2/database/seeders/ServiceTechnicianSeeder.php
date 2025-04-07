<?php

namespace Database\Seeders;

use App\Models\ServiceTechnician;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceTechnicianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ServiceTechnician::factory(15)->create();
    }
}
