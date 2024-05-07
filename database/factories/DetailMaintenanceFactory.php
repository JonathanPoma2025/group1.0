<?php

namespace Database\Factories;
use App\Models\Maintenance;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DetailMaintenance>
 */
class DetailMaintenanceFactory extends Factory
{

    public function maintenances()
    {
        return once(function (){
            return Maintenance::pluck('id');
        });
    }

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'detail' => fake()->word(),
            'maintenance_id' => $this->maintenances()->random(),
        ];
    }
}
