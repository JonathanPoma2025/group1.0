<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $marcas = [
            'Toyota',
            'Nissan',
            'Honda',
            'Kia',
            'Hyundai',
            'Mitsubishi'
        ];

        Brand::factory(count($marcas))->sequence(fn($sqn) => ['name' => $marcas[$sqn->index]])->create();
    }
}
