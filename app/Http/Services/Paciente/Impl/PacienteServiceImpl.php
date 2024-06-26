<?php

namespace App\Http\Services\Paciente\Impl;

use App\Http\Repository\PacienteRepository;
use App\Http\Services\Paciente\PacienteService;
use App\Models\Paciente;

class PacienteServiceImpl implements PacienteService
{


    public function __construct(protected PacienteRepository $pacienteRepository)
    {
    }

    public function getAll()
    {
        return $this->pacienteRepository->getAll();
    }

    public function getById($id)
    {
        return $this->pacienteRepository->getById($id);
    }

    public function store(array $data): void
    {
        $photoPath = $data['imagen']->file('photo')->store('public/photos');
        $payload = [
            'primer_nombre' => $data['primer_nombre'],
            'segundo_nombre' => $data['segundo_nombre'],
            'primer_apellido' => $data['primer_apellido'],
            'segundo_apellido' => $data['segundo_apellido'],
            'documento' => $data['documento'],
            'genero_id' => $data['genero_id'],
            'departamento_id' => $data['departamento_id'],
            'municipio_id' => $data['municipio_id'],
            'tipo_documento_id' => $data['tipo_documento_id'],
            'iamgen' => $photoPath
        ];
        $this->pacienteRepository->store($data);
    }

    public function update($id, $data)
    {
        return $this->pacienteRepository->update($id, $data);
    }

    public function delete($id)
    {
        $this->pacienteRepository->delete($id);
    }
}
