<?php

namespace Database\Seeders;

use App\Models\Departamento;
use App\Models\Municipio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MunicipiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $municipios = [
            'Amazonas' => ['Leticia', 'Puerto Nariño'],
            'Antioquia' => ['Medellín', 'Bello', 'Itagüí'],
            'Arauca' => ['Arauca', 'Arauquita', 'Saravena'],
        ];

        foreach ($municipios as $departamento => $municipios) {
            $departamento = Departamento::where('nombre', $departamento)->first();

            foreach ($municipios as $nombre) {
                Municipio::updateOrCreate([
                    'nombre' => $nombre,
                    'departamento_id' => $departamento->id,
                ]);
            }
        }
    }
}
