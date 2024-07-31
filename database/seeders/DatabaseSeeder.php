<?php

namespace Database\Seeders;

use App\Models\Advice;
use App\Models\User;
use App\Models\Brand;
use App\Models\CarType;
use App\Models\ClientRepairshop;
use App\Models\DetailMaintenance;
use App\Models\Maintenance;
use App\Models\Reminder;
use App\Models\Repairshop;
use App\Models\Type;
use App\Models\Vehicle;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([

            BrandSeeder::class,
            CarTypeSeeder::class,



         ]);

            User::factory()->create([
                'name' => 'TestExample@User',
                'email' => '',

            ]);
            Advice::factory()->create([
                'name' => 'j',
                'description' => '',
            ]);
            Brand::factory()->create([
                'name' => 'j',
            ]);
            CarType::factory()->create([
                'name' => 'j',
            ]);
            Repairshop::factory()->create([
                'name' => 'j',
                'email' => 'TestExample@Mechanic',
            ]);
            Reminder::factory()->create([
                'name' => 'j',

            ]);
            Maintenance::factory()->create([
                'name' => 'j',
            ]);
            ClientRepairshop::factory()->create([
                'name' => 'j',

            ]);
            Vehicle::factory()->create([
                'name' => '',
            ]);
            DetailMaintenance::factory()->create([
                'name' => '',
            ]);
            Type::factory()->create([
                'name' => '',
            ]);

    }
}
