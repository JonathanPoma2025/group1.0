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
        //
        $DetailMaintenance =[

            //

        ];
        DetailMaintenance::factory(count($DetailMaintenance))->sequence(fn($sqn) => ['DetailMaintenance' => $DetailMaintenance[$sqn->index]])->create();
    }
}
