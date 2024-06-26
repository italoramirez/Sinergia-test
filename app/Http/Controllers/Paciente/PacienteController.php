<?php

namespace App\Http\Controllers\Paciente;

use App\Http\Controllers\Controller;
use App\Http\Requests\PacienteRequest;
use App\Http\Services\Paciente\PacienteService;
use App\Models\Departamento;
use App\Models\Genero;
use App\Models\Municipio;
use App\Models\TipoDocumento;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function __construct(protected PacienteService $pacienteService)
    {}

    /**
     * @return Factory|Application|View|\Illuminate\Contracts\Foundation\Application
     */
    public function index()
    {
        $pacientes = $this->pacienteService->getAll();
        return view('dashboard', ['pacientes' => $pacientes]);
    }


    public function create()
    {
        $generos = Genero::all();
        $municipios = Municipio::all();
        $departamentos = Departamento::all();
        $documentos = TipoDocumento::all();

        return view('paciente.crear', [
            'generos' => $generos,
            'municipios' => $municipios,
            'departamentos' => $departamentos,
            'documentos' => $documentos,
        ]);
    }

    public function store(PacienteRequest $request)
    {
        $data = $request->all();
        $this->pacienteService->store($data);

        return redirect()->route('dashboard')->with('estado', 'Paciente creado con éxito');
    }

    public function show($id)
    {
        $generos = Genero::all();
        $municipios = Municipio::all();
        $departamentos = Departamento::all();
        $documentos = TipoDocumento::all();
        $paciente = $this->pacienteService->getById($id);

        return view('paciente.show', [
            'paciente' => $paciente,
            'generos' => $generos,
            'municipios' => $municipios,
            'departamentos' => $departamentos,
            'documentos' => $documentos,
        ]);
    }

    public function edit($id)
    {
        $paciente = $this->pacienteService->getById($id);
        $generos = Genero::all();
        $municipios = Municipio::all();
        $departamentos = Departamento::all();
        $documentos = TipoDocumento::all();

        return view('paciente.edit', [
            'paciente' => $paciente,
            'generos' => $generos,
            'municipios' => $municipios,
            'departamentos' => $departamentos,
            'documentos' => $documentos,
        ]);
    }

    public function update(PacienteRequest $request, $id)
    {
        $data = $request->all();
         $this->pacienteService->update($id, $data);
        return redirect()->route('dashboard')->with('actualizado', 'Paciente creado con éxito');
    }

    public function destroy($paciente)
    {
        $this->pacienteService->delete($paciente);
        return redirect()->route('dashboard')->with('eliminado', 'Paciente creado con éxito');
    }
}
