<?php

namespace Database\Seeders;

use App\Models\Advice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Advice =[
            'title',
            'description',
        ];
        Advice::factory(count($Advice))->sequence(fn($sqn) => ['name' => $Advice[$sqn->index]])->create();
    }
}
