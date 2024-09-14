<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\CarType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vehicle;

class VehicleSeeder extends Seeder
{
    public function carTypes()
    {
        return CarType::all();
    }

    public function brands()
    {
        return Brand::all();
    }

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = $this->brands();
        $carTypes = $this->carTypes();

        $vehicle = [
            [
                "car_type_id" => $carTypes->random(),
                "brand_id" => $brands->random(),
                "model"=>'Camaro',
                "placa"=>'p234567',
                "motor"=>'M1DH',
                "year"=>'2015',
                "color"=> 'rojo'
            ],
            [
                "car_type_id" => $carTypes->random(),
                "brand_id" => $brands->random(),
                "model"=>'Corvette',
                "placa"=>'P123456',
                "motor"=>'ZTGA',
                "year"=>'2014',
                "color"=> 'amarillo'
            ],
            [
                "model"=>'Challenger',
                "placa"=>'P654321',
                "motor"=>'ATN',
                "year"=>'2013',
                "color"=> 'azul'
            ],

            [
                "car_type_id" => $carTypes->random(),
                "brand_id" => $brands->random(),
                "model"=>'Explorer',
                "placa"=>'P098765',
                "motor"=>'V8',
                "year"=>'2018',
                "color"=> 'verde'
            ],
            [
                "car_type_id" => $carTypes->random(),
                "brand_id" => $brands->random(),
                "model"=>'Soul',
                "placa"=>'P592550',
                "motor"=>'V12',
                "year"=>'2012',
                "color"=> 'café'
            ],
            [
                "car_type_id" => $carTypes->random(),
                "brand_id" => $brands->random(),
                "model"=>'Rio',
                "placa"=>'P703953',
                "motor"=>'B47 D20 A',
                "year"=>'2011',
                "color"=> 'negro'
            ],
            [
                "car_type_id" => $carTypes->random(),
                "brand_id" => $brands->random(),
                "model"=>'Tucson',
                "placa"=>'P830464',
                "motor"=>'D 20 A',
                "year"=>'2010',
                "color"=> 'blanco'
            ],
            [
                "car_type_id" => $carTypes->random(),
                "brand_id" => $brands->random(),
                "model"=>'Grand Cherokee',
                "placa"=>'P032639',
                "motor"=>'Z 20 LEL',
                "year"=>'2009',
                "color"=> 'rosado'
            ],
            [
                "car_type_id" => $carTypes->random(),
                "brand_id" => $brands->random(),
                "model"=>'Delta',
                "placa"=>'P639374',
                "motor"=>'Z 13 DTh',
                "year"=>'2008',
                "color"=> 'morado'
            ],
        ];


        Vehicle::factory(count($vehicle))
            ->sequence(fn($sqn) => $vehicle[$sqn->index])
            ->create();
    }
}
