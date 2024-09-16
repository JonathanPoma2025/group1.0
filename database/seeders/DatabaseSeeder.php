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
        $this->call([
            UserSeeder::class,
            BrandSeeder::class,
            CarTypeSeeder::class,
            RepairshopsSeeder::class,
            ClientRepairshopSeeder::class,
            VehicleSeeder::class,
            //TypeSeeder::class,
            MaintenanceSeeder::class,
            DetailMaintenanceSeeder::class,
            //ReminderSeeder::class,
         ]);
    }
}
