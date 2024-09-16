<?php

namespace Database\Seeders;

use App\Models\DetailMaintenance;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailMaintenanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $detailMaintenance =[
            [
                'title' => 'Aceite de motor',
                'detail' => 'Cambiar aceite de motor y filtro',
                'maintenance_id' => 1,
            ],
            [
                'title' => 'Filtro de aire',
                'detail' => 'Limpier filtro de aire',
                'maintenance_id' => 1,
            ],
            [
                'title' => 'Brake Fluid',
                'detail' => 'Change brake fluid',
                'maintenance_id' => 1,
            ],
            [
                'title' => 'Spark Plugs',
                'detail' => 'Change spark plugs',
                'maintenance_id' => 1,
            ],
            [
                'title' => 'Engine Oil',
                'detail' => 'Change engine oil and filter',
                'maintenance_id' => 1,
            ],
            [
                'title' => 'Air Filter',
                'detail' => 'Change air filter',
                'maintenance_id' => 1,
            ],
            [
                'title' => 'Brake Fluid',
                'detail' => 'Change brake fluid',
                'maintenance_id' => 1,
            ],
            [
                'title' => 'Spark Plugs',
                'detail' => 'Change spark plugs',
                'maintenance_id' => 1,
            ],
        ];

        DetailMaintenance::factory(count($detailMaintenance))
            ->sequence(fn($sqn) => $detailMaintenance[$sqn->index])
            ->create();
    }
}
