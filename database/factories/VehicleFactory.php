<?php

namespace Database\Factories;
use App\Models\CarType;
use App\Models\Brand;
use App\Models\User;
use App\Models\Role;


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicle>
 */
class VehicleFactory extends Factory
{

    public function users()
    {
        return once(function (){
            return User::pluck('id');
        });
    }

    public function brands()
    {
        return once(function (){
            return Brand::pluck('id');
        });
    }

    public function carTypes()
    {
        return once(function (){
            return CarType::pluck('id');
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
            'model' =>  '',
            'placa' =>  '',
            'motor' =>  '',
            'year' =>  '',
            'color' =>  '',
        ];
    }
}
