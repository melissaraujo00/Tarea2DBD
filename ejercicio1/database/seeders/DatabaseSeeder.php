<?php

namespace Database\Seeders;

use App\Models\Artifact;
use App\Models\ConservationTechnique;
use App\Models\Dating;
use App\Models\Excavation;
use App\Models\Exhibition;
use App\Models\Material;
use App\Models\Publication;
use App\Models\Responsible;
use App\Models\ScientificMethod;
use App\Models\Time;
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

        Excavation::factory(20)->create();
        Time::factory(30)->create();

        Material::factory(30)->create();
        Publication::factory(30)->create();
        Exhibition::factory(30)->create();
        ScientificMethod::factory(10)->create();
        Responsible::factory(20)->create();
        ConservationTechnique::factory(20)->create();
        Artifact::factory(5)->create();

        Dating::factory(10)->create();
    }
}
