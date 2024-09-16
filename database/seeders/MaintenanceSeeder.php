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
        $maintenance =[
            [
                'date' => '2024-06-01',
                'time_span' => 2,
                'upcoming_date' => '2024-09-29',
                'vehicle_id' => 1,
            ],
        ];

        Maintenance::factory(count($maintenance))
            ->sequence(fn($sqn) => $maintenance[$sqn->index])
            ->create();
    }
}
