<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $CarroTipo = [
            'Sedán',
            'Hatchback',
            'Camioneta',
            'Todoterreno',
        ];

        #CarType::factory(count($CarroTipo))->sequence(fn($sqn) => ['name'=>$CarroTipo[$sqn->index]])->create();

    }
}
