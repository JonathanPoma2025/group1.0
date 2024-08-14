<?php

namespace Database\Seeders;

use App\Models\Repairshops;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Factories\RepairshopsFactory;


class RepairshopsSeeder extends Seeder
{

    public function run(): void
    {
       $repairshopNames = ['Repairshop1', 'Repairshop2', 'Repairshop3']; // Example array of repairshop names

        Repairshops::factory()
            ->count(count($repairshopNames))
            ->sequence(fn($sqn) => ['name' => $repairshopNames[$sqn->index]])
                ->create();


                 // Directly using the factory class
                $factory = new RepairshopsFactory();

                 // Use the factory to create Repairshop instances
                $repairshops = $factory->count(10)->make();

                 // Save the created instances to the database
                foreach ($repairshops as $repairshop) {
                    $repairshop->save();

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

        Repairshops::factory(count($Repairshop))->sequence(fn($sqn) => ['name' => $Repairshop[$sqn->index]])->create();

    }
    }
}
