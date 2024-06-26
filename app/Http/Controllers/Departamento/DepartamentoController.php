<?php

namespace App\Http\Controllers\Departamento;

use App\Http\Controllers\Controller;
use App\Models\Departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function municipios(Departamento $departamento)
    {
        return response()->json($departamento->municipios);
    }
}
