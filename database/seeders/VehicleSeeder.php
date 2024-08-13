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
          //  "model",
          //  "year",

        ];

        Vehicle::factory(count($Vehicle))->sequence(fn($sqn) => ['Vehicle' => $Vehicle[$sqn->index]])->create();

    }
}
