<?php

namespace Database\Seeders;

use App\Models\Instrument;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InstrumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $instruments = [
            [
                'name' => 'Violín'
            ],
            [
                'name' => 'Viola'
            ],
            [
                'name' => 'Violonchelo'
            ],
            [
                'name' => 'Contrabajo'
            ],
            [
                'name' => 'Flauta'
            ],
            [
                'name' => 'Oboe'
            ],
            [
                'name' => 'Clarinete'
            ],
            [
                'name' => 'Fagot'
            ],
            [
                'name' => 'Trompeta'
            ],
            [
                'name' => 'Trombón'
            ],
            [
                'name' => 'Tuba'
            ],
            [
                'name' => 'Corno francés'
            ],
            [
                'name' => 'Timbales'
            ],
            [
                'name' => 'Bombo'
            ],
            [
                'name' => 'Platillos'
            ],
            [
                'name' => 'Xilófono'
            ],
            [
                'name' => 'Arpa'
            ],
            [
                'name' => 'Piano'
            ]
        ];

        foreach ($instruments as $instrument) {
            Instrument::create($instrument);
        }
    }
}
