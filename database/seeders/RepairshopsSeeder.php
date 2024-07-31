<?php

namespace Database\Seeders;

use App\Models\Repairshop;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RepairshopsSeeder extends Seeder
{

    public function run(): void
    {
        $Repairshop = [
            [
                "name" => "j",
                "email" => "",
                "user_id" => 1
            ],
            [
                "name" => "j",
                "email" => "",
                "user_id" => 1
            ],
        ];

        Repairshop::factory(count($Repairshop))->sequence(fn($sqn) => ['name' => $Repairshop[$sqn->index]])->create();

    }
}
