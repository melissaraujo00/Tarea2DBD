<?php

namespace Database\Seeders;

use App\Models\Composer;
use App\Models\Criticism;
use App\Models\Instrument;
use App\Models\Loan;
use App\Models\Musical;
use App\Models\Musician;
use App\Models\Presentation;
use App\Models\Rehearsal;
use App\Models\RehearsalChamber;
use App\Models\User;
use Database\Factories\InstrumentMusicianFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            InstrumentSeeder::class
        ]);

        Musician::factory()
            ->count(20)
            ->hasAttached(
                Instrument::all()->random(3),
                [
                            'level' => fake()->randomElement(['Principiante', 'Basico', 'Intermedio', 'Avanzado', 'Profesional', 'Maestro']),
                            'is_orchestra' => fake()->boolean(),
                        ]
            )
            ->create();

        Loan::factory(20)->create();
        Composer::factory(15)->create();

        Musical::factory()
            ->count(10)
            ->hasAttached(
                Instrument::all()->random(2),
                [
                    'quantity' => fake()->numberBetween(1, 10),
                ]
            )
            ->create();

        RehearsalChamber::factory(20)->create();
        Rehearsal::factory(10)->create();
        Presentation::factory(10)->create();


        Musician::all()->each(function ($musician) {
            $musician->presentations()->attach(
                Presentation::inRandomOrder()->limit(rand(1, 3))->pluck('id')->toArray()
            );
        });

        Criticism::factory(10)->create();


    }
}
