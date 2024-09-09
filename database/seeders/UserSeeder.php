<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $User = [
            [
                'name' => 'Juan Pérez',
                'email' => 'mechanic@example.com',
                'cellphone_number' => 45326981,
                'is_mechanic' => true
            ],
            [
                'name' => 'Luis Pérez',
                'email' => 'mechanic1@example.com',
                'cellphone_number' => 45326981,
                'is_mechanic' => true
            ],

        ];

        User::factory(count($User))->sequence(fn($sqn) => $User[$sqn->index])->create();
    }
}
