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
        $user = [
            [
                'name' => 'Edgardo Cabrera',
                'email' => 'mechanic@example.com',
                'is_mechanic' => true,
                'password'=> 'password'
            ],
            [
                'name' => 'Alex Moreno',
                'email' => 'customer@example.com',
                'is_mechanic' => false,
                'password'=> 'password',
                'pin' => 'ab12'
            ],
            [
                'name' => 'Fernando Alfaro',
                'email' => 'fernanalfa@example.com',
                'is_mechanic' => false,
                'password'=> 'Password100'
            ],
            [
                'name' => 'Valeria Rivas',
                'email' => 'vareri@gmail.com',
                'is_mechanic' => false,
                'password'=> 'Password100'
            ],
            [
                'name' => 'Alisson Ayala',
                'email' => 'alissayal@yahoo.com',
                'is_mechanic' => false,
                'password'=> 'Password100'
            ],
            [
                'name' => 'Justin Ramírez',
                'email' => 'rami33ju@example.com',
                'is_mechanic' => false,
                'password'=> 'Password100'
            ],
            [
                'name' => 'Nahum Gómez',
                'email' => 'student1@yahoo.com',
                'is_mechanic' => false,
                'password'=> 'Password100'
            ],
            [
                'name' => 'Jonathan Zelada',
                'email' => 'expoprueba@example.com',
                'is_mechanic' => true,
                'password'=> 'Password100'
            ],
        ];

        User::factory(count($user))->sequence(fn($sqn) => $user[$sqn->index])->create();

        $usuarios = [
            [
                'name' => 'Karen Rivas',
                'email' => 'sofiamiss@yahoo.com',
                'is_mechanic' => true,
                'password'=> 'Password100'
            ],
            [
                'name' => 'Juan Perez',
                'email' => 'mjuanpz@email.com',
                'is_mechanic' => false,
                'password'=> 'Password100'
            ],
            [
                'name' => 'Luis Benitez',
                'email' => 'Lui33@yahoo.com',
                'is_mechanic' => false,
                'password'=> 'Password100'
            ],
            [
                'name' => 'Josue Echeverria',
                'email' => 'chevie@example.com',
                'is_mechanic' => false,
                'password'=> 'Password100'
            ],
            [
                'name' => 'Karla Cardona',
                'email' => 'Kaya@gmail.com',
                'is_mechanic' => false,
                'password'=> 'Password100'
            ],
            [
                'name' => 'Hazel Peña',
                'email' => 'jhadsg@gmail.com',
                'is_mechanic' => false,
                'password'=> 'Password100'
            ],
            [
                'name' => 'Lisseth Mejia',
                'email' => 'lismejia@yahoo.com',
                'is_mechanic' => false,
                'password'=> 'Password100'
            ],
        ];
    }
}
