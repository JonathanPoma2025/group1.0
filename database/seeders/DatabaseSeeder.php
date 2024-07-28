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
                'name' => 'j',
                'email' => '',

            ]);
            Advice::factory()->create([
                'title' => 'j',
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
                'email' => '',
            ]);
            Reminder::factory()->create([
                'date' => 'j',
                'description' => '',
                'maintenance_id' => '',
            ]);
            Maintenance::factory()->create([
                'date' => 'j',
                'time_span' => '',
                'upcoming_date' => '',
                'type_id' => '',
                'vehicle_id' => '',
            ]);
            ClientRepairshop::factory()->create([
                'name' => 'j',
                'email' => '',
            ]);
            Vehicle::factory()->create([
                'car_type_id' => '',
                'brand_id' => '',
                'model' => '',
                'year' => '',
                'user_id' => '',
            ]);
            DetailMaintenance::factory()->create([
                'detail' => 'Test User',
                'maintenance_id' => 'test@example.com',
            ]);
            Type::factory()->create([
                'maintenance' => '',
            ]);

    }
}
