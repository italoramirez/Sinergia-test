<?php

namespace Database\Seeders;

use App\Models\Departamento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartamentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departamentos = [
            'Amazonas',
            'Antioquia',
            'Arauca',
        ];

        foreach ($departamentos as $nombre) {
            Departamento::updateOrCreate(['nombre' => $nombre]);
        }
    }
}
