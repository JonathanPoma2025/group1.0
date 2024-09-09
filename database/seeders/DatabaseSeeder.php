<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Brand;
use App\Models\CarType;
use App\Models\ClientRepairshop;
use App\Models\DetailMaintenance;
use App\Models\Maintenance;
use App\Models\Reminder;
use App\Models\Repairshops;
use App\Models\Type;
use App\Models\Vehicle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Factories\RepairshopsFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            //BrandSeeder::class,
            //CarTypeSeeder::class,
            //ClientRepairshopSeeder::class,
            //DetailMaintenanceSeeder::class,
            //MaintenanceSeeder::class,
            //ReminderSeeder::class,
            //RepairshopsSeeder::class,
            //TypeSeeder::class,
            //VehicleSeeder::class,

         ]);

            User::factory()->create([
                'name' => 'TestExample@User',
                'email' => '',
            ]);
            Brand::factory()->create([
                'name' => 'j',
            ]);
            CarType::factory()->create([
                'name' => 'j',
            ]);
            Repairshops::factory()->create([
                'name' => 'j',
            ]);
            Reminder::factory()->create([
                'Reminder' => 'j',
            ]);
            Maintenance::factory()->create([
                'Maintenance' => 'j',
            ]);
            ClientRepairshop::factory()->create([
                'name' => 'j',
            ]);
            Vehicle::factory()->create([
                'Vehicle' => '',
            ]);
            DetailMaintenance::factory()->create([
                'DetailMaintenance' => '',
            ]);
            Type::factory()->create([
                'type' => 'j',
            ]);

    }
}
