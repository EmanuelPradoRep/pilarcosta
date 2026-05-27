

@extends('adminlte::page')

@section('title', 'Alumnos del Curso')

@section('content_header')
    <h1 class="text-xl font-semibold text-gray-700">
        Listado de Alumnos del Curso
    </h1>
@stop

@section('content')
@vite(['resources/css/app.css'])

<div class="card">
    <div class="card-header flex justify-between items-center">
        <form method="GET" action="" class="flex space-x-4">
            <div class="flex items-center space-x-2">
                <label for="nombre" class="text-sm font-medium text-gray-700">Nombre</label>
                <input type="text" id="nombre" name="nombre"
                       class="w-48 border border-gray-300 rounded-md shadow-sm p-1 focus:ring-blue-500 focus:border-blue-500" />
            </div>

            <div class="flex items-center space-x-2">
                <label for="email" class="text-sm font-medium text-gray-700">Email</label>
                <input type="text" id="email" name="email"
                       class="w-48 border border-gray-300 rounded-md shadow-sm p-1 focus:ring-blue-500 focus:border-blue-500" />
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">
                Buscar
            </button>
        </form>
    </div>

    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Documento</th>
                    <th>Curso</th>
                </tr>
            </thead>
            <tbody>
                @foreach($actividades as $alumno)
                    <tr>
                        <td>{{ $alumno->persona ? $alumno->persona->nombre . ' ' . $alumno->persona->apellido : '—' }}</td>
                        <td>{{ $alumno->persona ? $alumno->persona->email : '—' }}</td>
                        <td>{{ $alumno->persona ? $alumno->persona->documento : '—' }}</td>
                        <td>{{ $alumno->actividad ? $alumno->actividad->nombre : '—' }}</td>
                          
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{-- Paginación --}}
        <div class="mt-3">
            {{ $actividades->links() }}
        </div>
    </div>
</div>
@stop
