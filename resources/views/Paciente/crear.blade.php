<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="w-full max-w-lg mx-auto mt-6">
        <form method="POST" action="{{ route('paciente.store') }}"
              class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="grid grid-cols-2 gap-4">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="tipo_documento_id">
                        Tipo de documento
                    </label>
                    <select
                        name="tipo_documento_id"
                        class="block appearance-none w-full bg-white border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="tipo_documento_id">
                        @foreach($documentos as $documento)
                            <option value="{{ $documento->id }}">
                                {{ $documento->nombre }}
                            </option>
                        @endforeach
                    </select>
                    @error('tipo_documento_id')
                    <div class="alert alert-danger">
                        <span class="font-bold text-red-600">¡Error!</span>
                        <p class="block text-red-600">{{ $message }}</p>
                    </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="documento">
                        Documento
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="documento" type="text"
                        name="documento"
                    >
                    @error('documento')
                    <div class="alert alert-danger">
                        <strong class="font-bold text-red-600">¡Error!</strong>
                        <p class="block text-red-600">{{ $message }}</p>
                    </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="primer_nombre">
                        Primer Nombre
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="primer_nombre" type="text"
                        name="primer_nombre"
                    >
                    @error('primer_nombre')
                    <div>
                        <strong class="font-bold text-red-600">¡Error!</strong>
                        <p class="block text-red-600">{{ $message }}</p>
                    </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="segundo_nombre">
                        Segundo Nombre
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="segundo_nombre" type="text"
                        name="segundo_nombre"
                    >
                    @error('segundo_nombre')
                    <div>
                        <strong class="font-bold text-red-600">¡Error!</strong>
                        <p class="block text-red-600">{{ $message }}</p>
                    </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="primer_apellido">
                        Primer Apellido
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="primer_apellido" type="text"
                        name="primer_apellido"
                    >
                    @error('primer_apellido')
                    <div class="alert alert-danger">
                        <strong class="font-bold text-red-600">¡Error!</strong>
                        <p class="block text-red-600">{{ $message }}</p>
                    </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="segundo_apellido">
                        Segundo Apellido
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="segundo_apellido" type="text"
                        name="segundo_apellido"
                    >
                    @error('segundo_apellido')
                    <div>
                        <strong class="font-bold text-red-600">¡Error!</strong>
                        <p class="block text-red-600">{{ $message }}</p>
                    </div>
                    @enderror
                </div>


                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="genero">
                        Género
                    </label>
                    <select
                        name="genero_id"
                        class="block appearance-none w-full bg-white border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="genero">
                        @foreach($generos as $genero)
                            <option value="{{ $genero->id }}">
                                {{ $genero->nombre }}
                            </option>
                        @endforeach
                    </select>
                    @error('genero_id')
                    <div>
                        <strong class="font-bold text-red-600">¡Error!</strong>
                        <p class="block text-red-600">{{ $message }}</p>
                    </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="departamento">
                        Departamento
                    </label>
                    <select
                        name="departamento_id"
                        class="block appearance-none w-full bg-white border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="departamento">
                        @foreach($departamentos as $departamento)
                            <option value="{{ $departamento->id }}">
                                {{ $departamento->nombre }}
                            </option>
                        @endforeach
                    </select>
                    @error('departamento_id')
                    <div>
                        <strong class="font-bold text-red-600">¡Error!</strong>
                        <p class="block text-red-600">{{ $message }}</p>
                    </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="municipio">
                        Municipio
                    </label>
                    <select
                        name="municipio_id"
                        class="block appearance-none w-full bg-white border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="municipio">
                    </select>
                    @error('municipio_id')
                    <div>
                        <strong class="font-bold text-red-600">¡Error!</strong>
                        <p class="block text-red-600">{{ $message }}</p>
                    </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="foto">
                        Seleccione foto
                    </label>
                    <input type="file" name="imagen">
                </div>

            </div>
            <div class="mb-4 flex justify-between">
                <button
                    type="submit"
                    class="mt-3 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Crear Paciente
                </button>
                <div class="">
                    <a href="{{ route('dashboard') }}"
                       class="mt-5 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-red-700 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Volver
                    </a>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
