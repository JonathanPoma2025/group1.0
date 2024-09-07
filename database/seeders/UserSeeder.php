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
                'name' => 'Juan Perez',
                'email' => 'mjuanpz@email.com',
                'is_mechanic' => true
            ],
            [
                'name' => 'Luis Benitez',
                'email' => 'Lui33@yahoo.com',
                'is_mechanic' => false
            ],

            [
                'name' => 'Fernando Alfaro',
                'email' => 'fernanalfa@example.com',
                'is_mechanic' => true
            ],

            [
                'name' => 'Hazel Peña',
                'email' => 'jhadsg@gmail.com',
                'is_mechanic' => false
            ],

            [
                'name' => 'Lisseth Mejia',
                'email' => 'lismejia@yahoo.com',
                'is_mechanic' => true
            ],

            [
                'name' => 'Valeria Rivas',
                'email' => 'vareri@gmail.com',
                'is_mechanic' => false
            ],

            [
                'name' => 'Josue Echeverria',
                'email' => 'chevie@example.com',
                'is_mechanic' => true
            ],

            [
                'name' => 'Karla Cardona',
                'email' => 'Kaya@gmail.com',
                'is_mechanic' => false
            ],

            [
                'name' => 'Alisson Ayala',
                'email' => 'alissayal@yahoo.com',
                'is_mechanic' => true
            ],

            [
                'name' => 'Justin Ramirez',
                'email' => 'rami33ju@example.com',
                'is_mechanic' => false
            ],

            [
                'name' => 'Karen Rivas',
                'email' => 'sofiamiss@yahoo.com',
                'is_mechanic' => true
            ],

            [
                'name' => 'Nahum Goómez',
                'email' => 'student1@yahoo.com',
                'is_mechanic' => false
            ],

            [
                'name' => 'Jonathan Zelada',
                'email' => 'expoprueba@example.com',
                'is_mechanic' => true
            ],

            [
                'name' => 'Alex Moreno',
                'email' => 'etudenprueba1@example.com',
                'is_mechanic' => false
            ],

            [
                'name' => 'Edgardo Cabrera',
                'email' => 'seeder1@example.com',
                'is_mechanic' => true
            ],

        ];

        User::factory(count($User))->sequence(fn($sqn) => $User[$sqn->index])->create();
    }
}
