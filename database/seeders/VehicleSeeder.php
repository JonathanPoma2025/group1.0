<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vehicle;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Vehicle = [
            [
                "model"=>'camaro',
                "placa"=>'p234567',
                "motor"=>'M1DH',
                "year"=>'2015',
                "color"=> 'rojo'
            ],

            [
                "model"=>'corvette',
                "placa"=>'P123456',
                "motor"=>'ZTGA',
                "year"=>'2014',
                "color"=> 'amarillo'
            ],

            [
                "model"=>'challenger',
                "placa"=>'P654321',
                "motor"=>'ATN',
                "year"=>'2013',
                "color"=> 'azul'
            ],

            [
                "model"=>'explorer',
                "placa"=>'P098765',
                "motor"=>'V8',
                "year"=>'2018',
                "color"=> 'verde'
            ],

            [
                "model"=>'soul',
                "placa"=>'P592550',
                "motor"=>'V12',
                "year"=>'2012',
                "color"=> 'café'
            ],

            [
                "model"=>'rio',
                "placa"=>'P703953',
                "motor"=>'B47 D20 A',
                "year"=>'2011',
                "color"=> 'negro'
            ],

            [
                "model"=>'tucson',
                "placa"=>'P830464',
                "motor"=>'D 20 A',
                "year"=>'2010',
                "color"=> 'blanco'
            ],

            [
                "model"=>'grand cherokee',
                "placa"=>'P032639',
                "motor"=>'Z 20 LEL',
                "year"=>'2009',
                "color"=> 'rosado'
            ],

            [
                "model"=>'delta',
                "placa"=>'P639374',
                "motor"=>'Z 13 DTh',
                "year"=>'2008',
                "color"=> 'morado'
            ],
        ];

        Vehicle::factory(count($Vehicle))->sequence(fn($sqn) => ['Vehicle' => $Vehicle[$sqn->index]])->create();
    }
}
