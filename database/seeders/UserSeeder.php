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

            'name',
            'email',
            'password',
            'birthday',
            'cellphone_number',

        ];

        User::factory(count($User))->sequence(fn($sqn) => ['type' => $User[$sqn->index]])->create();
    }
}
