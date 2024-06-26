<?php

namespace App\Http\Repository\Impl;

use App\Http\Repository\PacienteRepository;
use App\Models\Paciente;

class PacienteRepositoryImpl implements PacienteRepository
{

    public function getAll()
    {
        return Paciente::with(
            [
                'genero',
                'departamento',
                'municipio',
                'genero'
            ]
        )->get();
    }

    public function getById($id)
    {
        return Paciente::with(
            [
                'genero',
                'departamento',
                'municipio',
                'genero'
            ]
        )->find($id);
    }

    public function store(array $data): void
    {
        Paciente::create($data);
    }

    public function update($id, $data)
    {
        $paciente = Paciente::findorFail($id);
        $paciente->update($data);
        return $paciente->toArray();
    }

    public function delete($id)
    {
        Paciente::destroy($id);
    }
}
