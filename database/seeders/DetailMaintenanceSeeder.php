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

            'detail',

        ];
        $DetailMaintenance::factory(count($DetailMaintenance))->sequence(fn($sqn) => ['name' => $DetailMaintenance[$sqn->index]])->create();
    }
}
