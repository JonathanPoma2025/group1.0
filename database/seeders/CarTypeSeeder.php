<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CarType;

class CarTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $CarroTipo = [
            'Sedan',
            'Hatchback',
            'Camioneta',
            'Todo terreno',
        ];

        CarType::factory(count($CarroTipo))->sequence(fn($sqn) => ['name'=>$CarroTipo[$sqn->index]])->create();

    }
}
