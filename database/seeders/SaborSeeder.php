<?php

namespace Database\Seeders;

use App\Models\Sabor;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SaborSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sabor::create(['sabor' => 'Fresa']);
        Sabor::create(['sabor' => 'Elote']);
        Sabor::create(['sabor' => 'Chocolate']);
        Sabor::create(['sabor' => 'Vainilla']);
        Sabor::create(['sabor' => 'Nuez']);
    }
}
