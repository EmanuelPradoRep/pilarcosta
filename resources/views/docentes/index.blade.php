

@extends('adminlte::page')

@section('title', 'Docentes')

@section('content_header')
    <h1 class="text-xl font-semibold text-gray-700">
        Docentes
    </h1>
@stop

@section('content')
@vite(['resources/css/app.css'])

<div class="card">
    <div class="card-header">
        <a href="{{ route('docentes.create') }}" class="btn btn-primary">
            Nuevo Docente
        </a>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Documento</th>
                    <th>Teléfono</th>
                    <th>Email</th>
                    <th>Activo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($docentes as $docente)
                    <tr>
                        <td>{{ $docente->id }}</td>
                        <td>{{ $docente->nombre }}</td>
                        <td>{{ $docente->apellido }}</td>
                        <td>{{ $docente->documento }}</td>
                        <td>{{ $docente->telefono }}</td>
                        <td>{{ $docente->email }}</td>
                        <td>
                            @if($docente->activo)
                                <span class="badge bg-success">Sí</span>
                            @else
                                <span class="badge bg-danger">No</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('docentes.show', $docente) }}" class="btn btn-info btn-sm">Ver</a>
                            <a href="{{ route('docentes.edit', $docente) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('docentes.destroy', $docente) }}" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{-- Paginación --}}
        <div class="mt-3">
            {{ $docentes->links() }}
        </div>
    </div>
</div>
@stop