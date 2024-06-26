<?php

namespace Database\Seeders;

use App\Models\Departamento;
use App\Models\Genero;
use App\Models\Municipio;
use App\Models\Paciente;
use App\Models\TipoDocumento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PacientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 5; $i++) {
            Paciente::create([
                'primer_nombre' => $faker->firstName,
                'segundo_nombre' => $faker->firstName,
                'primer_apellido' => $faker->lastName,
                'segundo_apellido' => $faker->lastName,
                'documento' => $faker->unique()->randomNumber,
                'genero_id' => Genero::all()->random()->id,
                'departamento_id' => Departamento::all()->random()->id,
                'municipio_id' => Municipio::all()->random()->id,
                'tipo_documento_id' => TipoDocumento::all()->random()->id,
            ]);
        }
    }
}
