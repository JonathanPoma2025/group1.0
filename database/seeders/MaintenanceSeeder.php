<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Maintenance;

class MaintenanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Maintenance =[
         //
     ];

        Maintenance::factory(count($Maintenance))->sequence(fn($sqn) => ['Maintenance' => $Maintenance[$sqn->index]])->create();

    }
}
