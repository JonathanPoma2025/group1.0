<?php

namespace Database\Seeders;

use App\Models\ClientRepairshop;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientRepairshopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ClientRepairshop =[

        ];
        ClientRepairshop::factory(count($ClientRepairshop))->sequence(fn($sqn) => ['name' => $ClientRepairshop[$sqn->index]])->create();

    }
}
