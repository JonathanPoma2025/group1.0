<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $type =[
            'maintenance',
            'type',
        ];

        Type::factory(count($type))
            ->sequence(fn($sqn) => ['type' => $type[$sqn->index]])
            ->create();
    }
}
