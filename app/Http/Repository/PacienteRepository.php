<?php

namespace App\Http\Repository;

interface PacienteRepository
{
    public function getAll();

    public function getById($id);

    public function store(array $data): void;

    public function update($id, $data);

    public function delete($id);
}
