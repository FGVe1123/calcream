<?php

namespace Database\Seeders;

use App\Models\Tamanio;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TamanioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tamanio::create(['tamanio' => 'Cono']);
        Tamanio::create(['tamanio' => 'Mini']);
        Tamanio::create(['tamanio' => 'Pequeño']);
        Tamanio::create(['tamanio' => 'Grande']);
    }
}
