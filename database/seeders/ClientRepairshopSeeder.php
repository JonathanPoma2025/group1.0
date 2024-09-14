<?php

namespace Database\Seeders;

use App\Models\ClientRepairshop;
use App\Models\Repairshops;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientRepairshopSeeder extends Seeder
{
    public function users()
    {
        return User::where('is_mechanic', false)->get();
    }

    public function repairshops()
    {
        return Repairshops::all();
    }
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = $this->users();
        $repairshops = $this->repairshops();

        $clientRepairshop =[
           [
               'user_id' => $users->random(),
               'repairshops_id' => 1
           ],
            [
                'user_id' => $users->random(),
                'repairshops_id' => 1
            ],
            [
                'user_id' => $users->random(),
                'repairshops_id' => 1
            ],
            [
                'user_id' => $users->random(),
                'repairshops_id' => $repairshops->random()
            ],
            [
                'user_id' => $users->random(),
                'repairshops_id' => $repairshops->random()
            ],
            [
                'user_id' => $users->random(),
                'repairshops_id' => $repairshops->random()
            ],
            [
                'user_id' => $users->random(),
                'repairshops_id' => $repairshops->random()
            ],
            [
                'user_id' => $users->random(),
                'repairshops_id' => $repairshops->random()
            ],
            [
                'user_id' => $users->random(),
                'repairshops_id' => $repairshops->random()
            ],
            [
                'user_id' => $users->random(),
                'repairshops_id' => $repairshops->random()
            ]
        ];

        ClientRepairshop::factory(count($clientRepairshop))
            ->sequence(fn($sqn) => $clientRepairshop[$sqn->index])
            ->create();
    }
}
