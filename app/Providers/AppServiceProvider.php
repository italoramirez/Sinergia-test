<?php

namespace App\Providers;

use App\Http\Repository\Impl\PacienteRepositoryImpl;
use App\Http\Repository\PacienteRepository;
use App\Http\Services\Paciente\Impl\PacienteServiceImpl;
use App\Http\Services\Paciente\PacienteService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

        $this->app->bind(PacienteRepository::class, PacienteRepositoryImpl::class);

        $this->app->bind(PacienteService::class, PacienteServiceImpl::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
