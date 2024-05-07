<?php

namespace Database\Factories;
use App\Models\Maintenance;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reminder>
 */
class ReminderFactory extends Factory
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
            'date' => fake()->date(),
            'description' => fake()->word(),
            'maintenance_id' => fake()->maintenances()->random(),
        ];
    }
}
