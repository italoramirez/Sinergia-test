<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @if (session('estado'))
        <div class="mt-5">
            <div class="text-center bg-green-200 rounded-md flex justify-center mx-[800px] p-4 w-[300px]">
                ¡Registro creado correctamente!
            </div>
        </div>
    @endif
    @if (session('actualizado'))
    <div class="mt-5">
        <div class="text-center bg-green-200 rounded-md flex justify-center mx-[800px] p-4 w-[300px]">
            ¡Registro actualizado correctamente!
        </div>
    @endif
        @if(session('eliminado'))
        <div class="mt-5">
            <div class="text-center bg-green-200 rounded-md flex justify-center mx-[800px] p-4 w-[300px]">
                ¡Registro eliminado correctamente!
            </div>
        @endif


    <div class=" divide-y divide-gray-200 w-[1420px]">
        <div class="flex justify-end mt-10">
            <a
                href="{{ route('paciente.crear') }}"
                class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Crear Paciente
            </a>
        </div>
    </div>
    <table class="mx-auto mt-5">
        <thead class="bg-gray-50">
        <tr>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombres</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Apellidos</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Género</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Departamento</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Municipio</th>
            <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider" >Acciones</th>
        </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
        @foreach ($pacientes as $paciente)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">{{ $paciente->primer_nombre }} {{ $paciente->segundo_nombre }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $paciente->primer_apellido }} {{ $paciente->segundo_apellido }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $paciente->genero->nombre }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $paciente->departamento->nombre }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $paciente->municipio->nombre }}</td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex justify-between">
                        <a
                            href=" {{ route('paciente.show', $paciente->id) }}"
                            class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                            Ver
                        </a>
                        <a
                            href=" {{ route('paciente.edit', $paciente->id) }}"
                            class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 mx-2">
                            Editar
                        </a>
                        <form method="POST" action="{{ route('paciente.destroy', $paciente->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded shadow-sm text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                Eliminar
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-app-layout>
