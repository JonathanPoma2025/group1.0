<?php

namespace Database\Seeders;

use App\Models\Repairshops;
use App\Models\User;
use Illuminate\Database\Seeder;

class RepairshopsSeeder extends Seeder
{
    public function users() {
        return User::where('is_mechanic', true)->pluck('id');
    }

    public function run(): void
    {
        $users = $this->users();
           $repairshops = [
               [
                   'name' => 'Taller Ejemplo 1',
                   'email' => 'taller1@example.com',
                   'cellphone_number' => '50364789',
                   'user_id' => $users->random()
               ],

               [
                   'name' => 'Taller Ejemplo 2',
                   'email' => 'taller2@example.com',
                   'cellphone_number' => '42364521',
                   'user_id' => $users->random()
               ],

               [
                    'name' => 'Taller Ejemplo 2',
                    'email' => 'taller2@example.com',
                    'cellphone_number' => '42364521',
                    'user_id' => $users->random()
                ],

                [
                    'name' => 'Taller Ejemplo 2',
                    'email' => 'taller2@example.com',
                    'cellphone_number' => '42364521',
                    'user_id' => $users->random()
                ],

                [
                    'name' => 'Taller Ejemplo 2',
                    'email' => 'taller2@example.com',
                    'cellphone_number' => '42364521',
                    'user_id' => $users->random()
                ],

                [
                    'name' => 'Taller Ejemplo 2',
                    'email' => 'taller2@example.com',
                    'cellphone_number' => '42364521',
                    'user_id' => $users->random()
                ],

                [
                    'name' => 'Taller Ejemplo 2',
                    'email' => 'taller2@example.com',
                    'cellphone_number' => '42364521',
                    'user_id' => $users->random()
                ],
           ]; // Example array of repairshop names

        Repairshops::factory(count($repairshops))->sequence(fn ($sqn) => $repairshops[$sqn->index])->create();
    }
}
