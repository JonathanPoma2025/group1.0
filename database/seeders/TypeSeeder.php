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
        $Type =[

            'maintenance',

        ];
        Type::factory(count($Type))->sequence(fn($sqn) => ['name' => $Type[$sqn->index]])->create();

    }
}
