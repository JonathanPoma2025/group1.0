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
                'name' => 'Test User',
                'email' => 'test@example.com',
                'birthday' => '',
            ]);
            Advice::factory()->create([
                'title' => 'Test User',
                'description' => 'test@example.com',
            ]);
            Brand::factory()->create([
                'name' => 'Test User',
            ]);
            CarType::factory()->create([
                'name' => 'Test User',
            ]);
            Repairshop::factory()->create([
                'name' => 'Test User',
                'email' => 'test@example.com',
            ]);
            Reminder::factory()->create([
                'date' => 'Test User',
                'description' => 'test@example.com',
                'maintenance_id' => '',
            ]);
            Maintenance::factory()->create([
                'date' => 'Test User',
                'time_span' => 'test@example.com',
                'upcoming_date' => '',
                'type_id' => '',
                'vehicle_id' => '',
            ]);
            ClientRepairshop::factory()->create([
                'name' => 'Test User',
                'email' => 'test@example.com',
            ]);
            Vehicle::factory()->create([
                'car_type_id' => 'Test User',
                'brand_id' => 'test@example.com',
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
