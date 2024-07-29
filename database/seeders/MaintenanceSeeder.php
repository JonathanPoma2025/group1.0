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
            'date',
            'time_span',
            'upcoming_date',
     ];

        Maintenance::factory(count($Maintenance))->sequence(fn($sqn) => ['name' => $Maintenance[$sqn->index]])->create();

    }
}
