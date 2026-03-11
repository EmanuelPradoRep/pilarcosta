
{{-- resources/views/actividades/panel/index.blade.php --}}
@extends('adminlte::page') {{-- si estás usando AdminLTE --}}

@section('title', 'Actividades')

@section('content_header')
    <h1>Listado de Actividades</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Fecha</th>
                        <th>Descripción</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($actividades as $actividad)
                        <tr>
                            <td>{{ $actividad->id }}</td>
                            <td>{{ $actividad->nombre }}</td>
                            <td>{{ $actividad->fecha }}</td>
                            <td>{{ $actividad->descripcion }}</td>
                            <td>
                               
                                
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">No hay actividades registradas.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <div class="mt-3">
                {{ $actividades->links() }} {{-- paginación --}}
            </div>
        </div>
    </div>
@stop
