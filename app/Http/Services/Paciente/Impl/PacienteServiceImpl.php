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
