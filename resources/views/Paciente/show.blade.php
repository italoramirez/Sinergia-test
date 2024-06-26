<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalles del Paciente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="ml-2">
                    <a href="{{ route('dashboard') }}"
                       class="mt-5 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Volver
                    </a>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <dt class="text-sm font-medium text-gray-500">
                        Nombres completos
                    </dt>
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        {{ $paciente->primer_nombre }} {{ $paciente->segundo_nombre }} {{ $paciente->primer_apellido }} {{ $paciente->segundo_apellido }}
                    </h3>
                    <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-3">
                        <div class="px-4 py-5 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Género
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900">
                                {{ $paciente->genero->nombre }}
                            </dd>
                        </div>
                        <div class="px-4 py-5 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Departamento
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900">
                                {{ $paciente->departamento->nombre }}
                            </dd>
                        </div>
                        <div class="px-4 py-5 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Municipio
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900">
                                {{ $paciente->municipio->nombre }}
                            </dd>
                        </div>
                        <div class="px-4 py-5 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Genero
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900">
                                {{ $paciente->genero->nombre }}
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
