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
        $Vehicle =[
            "car_type_id",
            "brand_id",
            "model",
            "year",
            "user_id",

        ];

        Vehicle::factory(count($Vehicle))->sequence(fn($sqn) => ['name' => $Vehicle[$sqn->index]])->create();

    }
}
