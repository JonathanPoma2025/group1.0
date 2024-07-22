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
            ]);
            Advice::factory()->create([
                'name' => 'Test User',
                'email' => 'test@example.com',
            ]);
            Brand::factory()->create([
                'name' => 'Test User',
                'email' => 'test@example.com',
            ]);
            CarType::factory()->create([
                'name' => 'Test User',
                'email' => 'test@example.com',
            ]);
            Repairshop::factory()->create([
                'name' => 'Test User',
                'email' => 'test@example.com',
            ]);
            Reminder::factory()->create([
                'name' => 'Test User',
                'email' => 'test@example.com',
            ]);
            Maintenance::factory()->create([
                'name' => 'Test User',
                'email' => 'test@example.com',
            ]);
            ClientRepairshop::factory()->create([
                'name' => 'Test User',
                'email' => 'test@example.com',
            ]);
            Vehicle::factory()->create([
                'name' => 'Test User',
                'email' => 'test@example.com',
            ]);
            DetailMaintenance::factory()->create([
                'name' => 'Test User',
                'email' => 'test@example.com',
            ]);
            Type::factory()->create([
                'name' => 'Test User',
                'email' => 'test@example.com',
            ]);
    }
}
