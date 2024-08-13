<?php

namespace Database\Seeders;

use App\Models\Reminder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReminderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Reminder =[
         //
        ];

        Reminder::factory(count($Reminder))->sequence(fn($sqn) => ['Reminder' => $Reminder[$sqn->index]])->create();


    }
}
