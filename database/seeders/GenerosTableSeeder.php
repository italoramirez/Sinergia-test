<?php

namespace Database\Seeders;

use App\Models\Genero;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenerosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $generos = ['Masculino', 'Femenino'];

        foreach ($generos as $nombre) {
            Genero::updateOrCreate(['nombre' => $nombre]);
        }
    }
}
