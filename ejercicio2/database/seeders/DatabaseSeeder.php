<?php

namespace Database\Seeders;

use App\Models\ProximityStationComparison;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call(RoleSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(RolePermissionSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(WeatherStationSeeder::class);
        $this->call(ClimateRecordSeeder::class);
        $this->call(TypeMaintenanceSeeder::class);
        $this->call(MaintenanceSeeder::class);
        $this->call(ServiceTechnicianSeeder::class);
        $this->call(MaintenanceServiceTechnicianSeeder::class);
        $this->call(ProximityStationComparisonSeeder::class);
    }
}
