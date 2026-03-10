

{{-- resources/views/actividadesalumno/index.blade.php --}}
@extends('adminlte::page')

@section('title', 'Actividades y Alumnos')

@section('content_header')
    <h1 class="text-xl font-semibold text-gray-700">
        Actividades - Alumnos
    </h1>
@stop

@section('content')
@vite(['resources/css/app.css'])

<div class="card">
    <div class="card-header">
        Nueva Asignación
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Actividad</th>
                    <th>Alumno</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($actividadesalumnos as $aa)
                    <tr>
                        <td>{{ $aa->id }}</td>
                        <td>{{ $aa->actividad ? $aa->actividad->nombre : '—' }}</td>
                        <td>
                            {{ $aa->persona ? $aa->persona->nombre . ' ' . $aa->persona->apellido : '—' }}
                        </td>
                        <td>
                            {{-- Aquí podés poner botones de editar/eliminar --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{-- Paginación --}}
        <div class="mt-3">
            {{ $actividadesalumnos->links() }}
        </div>
    </div>
</div>
@stop