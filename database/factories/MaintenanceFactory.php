<?php

namespace Database\Factories;
use App\Models\Type;
use App\Models\Vehicle;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Maintenance>
 */
class MaintenanceFactory extends Factory
{

    public function types()
    {
        return once(function (){
            return Type::pluck('id');
        });
    }

    public function vehicles()
    {
        return once(function (){
            return Vehicle::pluck('id');
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
            'time_span' => fake()->randomNumber(2, false),
            'upcoming_date' => fake()->date(),
            'type_id' => $this->types()->random(),
           'vehicle_id' => $this->vehicles()->random(),
        ];
    }
}
