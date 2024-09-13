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
                   'name' => 'Taller los hermanos',
                   'adress' => 'Santa Ana, Metapán',
                   'email' => 'brothers1@gmail.com',
                   'cellphone_number' => '50364789',
                   'user_id' => $users->random()
               ],

               [
                   'name' => 'Taller Grupo Q',
                   'adress' => 'Santa Ana, Chalchuapa',
                   'email' => 'qgroup@yahoo.com',
                   'cellphone_number' => '42364521',
                   'user_id' => $users->random()
               ],

               [
                    'name' => 'Taller Lopez Lopez',
                    'adress' => 'Santa Tecla, Merliot',
                    'email' => 'lopez2022@example.com',
                    'cellphone_number' => '63520459',
                    'user_id' => $users->random()
                ],

                [
                    'name' => 'Taller Bendicion de Dios',
                    'adress' => 'Santa Tecla, Santa Rosa',
                    'email' => 'godbless@example.com',
                    'cellphone_number' => '63025403',
                    'user_id' => $users->random()
                ],

                [
                    'name' => 'Taller Hermanos Gómez',
                    'adress' => 'Santa Ana, Santa Ana',
                    'email' => 'brogmz@example.com',
                    'cellphone_number' => '75288276',
                    'user_id' => $users->random()
                ],

                [
                    'name' => 'Taller Arita',
                    'adress' => 'La libertad, Lourdes',
                    'email' => 'arita2@example.com',
                    'cellphone_number' => '08429452',
                    'user_id' => $users->random()
                ],

                [
                    'name' => 'Taller Royal Parts',
                    'adress' => 'La Libertad, Huizúcar',
                    'email' => 'taller2@gmail.com',
                    'cellphone_number' => '6026493',
                    'user_id' => $users->random()
                ],

                [
                    'name' => 'Impresa Repuestos',
                    'adress' => 'La Libertad, Zaragoza',
                    'email' => 'Impresasv@yahoo.com',
                    'cellphone_number' => '036493721',
                    'user_id' => $users->random()
                ],

                [
                    'name' => 'Taller La Esquina',
                    'adress' => 'La Libertad, Santa Tecla',
                    'email' => 'esquina2023@example.com',
                    'cellphone_number' => '12345678',
                    'user_id' => $users->random()
                ],

                [
                    'name' => 'Taller Ferrari',
                    'adress' => 'Pasaquina, La Unión',
                    'email' => 'carsrepair@example.com',
                    'cellphone_number' => '09876543',
                    'user_id' => $users->random()
                ],

                [
                    'name' => 'Taller ECQ',
                    'adress' => 'Suchitoto, Cuscatlan',
                    'email' => 'repair2@example.com',
                    'cellphone_number' => '89674532',
                    'user_id' => $users->random()
                ],

                [
                    'name' => 'Taller La Promesa',
                    'adress' => 'El Boqueron, San Salvador',
                    'email' => 'Promise2@gmail.com',
                    'cellphone_number' => '25252828',
                    'user_id' => $users->random()
                ],

                [
                    'name' => 'Taller Michellin',
                    'adress' => 'Santa Tecla, La Libertad',
                    'email' => 'Michellin2024@yahoo.com',
                    'cellphone_number' => '22287615',
                    'user_id' => $users->random()
                ],
           ]; // Example array of repairshop names

        Repairshops::factory(count($repairshops))->sequence(fn ($sqn) => $repairshops[$sqn->index])->create();
    }
}
