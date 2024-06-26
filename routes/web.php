<?php

use App\Http\Controllers\Departamento\DepartamentoController;
use App\Http\Controllers\Paciente\PacienteController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::delete('/pacientes/{paciente}', [PacienteController::class, 'destroy'])->name('paciente.destroy');
    Route::get('/pacientes/{paciente}/show', [PacienteController::class, 'show'])->name('paciente.show');
    Route::get('/pacientes/{paciente}', [PacienteController::class, 'edit'])->name('paciente.edit');
    Route::put('/pacientes/{paciente}', [PacienteController::class, 'update'])->name('paciente.update');
    Route::get('/dashboard', [PacienteController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
    Route::get('/pacientes', [PacienteController::class, 'create'])->name('paciente.crear');
    Route::post('/pacientes', [PacienteController::class, 'store'])->name('paciente.store');

    Route::get('/departamentos/{departamento}/municipios', [DepartamentoController::class, 'municipios'])->name('departamentos.municipios');

});

require __DIR__.'/auth.php';
