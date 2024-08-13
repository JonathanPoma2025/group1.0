<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ClientRepairshop>
 */
class ClientRepairshopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'vehicle_brand' => $this->faker->randomElement(['Toyota', 'Honda', 'Ford', 'Chevrolet', 'Nissan']),
            'vehicle_model' => $this->faker->randomElement(['Sedán', 'Hatcback', 'Todoterreno', 'Camioneta', 'SUV']),
            'vehicle_year' => $this->faker->year



        ];
    }
}
