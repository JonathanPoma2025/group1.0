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
                   'name' => 'Taller Los Hermanos',
                   'address' => 'Santa Ana, Metapán',
                   'email' => 'brothers1@gmail.com',
                   'cellphone_number' => '50364789',
                   'user_id' => $users->random()
               ],
               [
                    'name' => 'Taller Lopez Lopez',
                    'address' => 'Santa Tecla, Merliot',
                    'email' => 'lopez2022@example.com',
                    'cellphone_number' => '63520459',
                    'user_id' => $users->random()
                ],
                [
                    'name' => 'Taller Bendicion de Dios',
                    'address' => 'Santa Tecla, Santa Rosa',
                    'email' => 'godbless@example.com',
                    'cellphone_number' => '63025403',
                    'user_id' => $users->random()
                ],
                [
                    'name' => 'Taller Hermanos Gómez',
                    'address' => 'Santa Ana, Santa Ana',
                    'email' => 'brogmz@example.com',
                    'cellphone_number' => '75288276',
                    'user_id' => $users->random()
                ],
                [
                    'name' => 'Taller Arita',
                    'address' => 'La libertad, Lourdes',
                    'email' => 'arita2@example.com',
                    'cellphone_number' => '08429452',
                    'user_id' => $users->random()
                ],
                [
                    'name' => 'Taller La Esquina',
                    'address' => 'La Libertad, Santa Tecla',
                    'email' => 'esquina2023@example.com',
                    'cellphone_number' => '12345678',
                    'user_id' => $users->random()
                ],
           ]; // Example array of repairshop names

        Repairshops::factory(count($repairshops))->sequence(fn ($sqn) => $repairshops[$sqn->index])->create();
    }
}
