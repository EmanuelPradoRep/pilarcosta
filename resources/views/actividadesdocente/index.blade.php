

@extends('adminlte::page')

@section('title', 'Actividades y Docentes')

@section('content_header')
    <h1 class="text-xl font-semibold text-gray-700">
        Actividades - Docentes
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
                    <th>Docente</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($actividadesdocentes as $ad)
                    <tr>
                        <td>{{ $ad->id }}</td>
                        <td>{{ $ad->actividad ? $ad->actividad->nombre : '—' }}</td>
                        <td>{{ $ad->docente ? $ad->docente->nombre . ' ' . $ad->docente->apellido : '—' }}</td>
                        <td>{{ $ad->rol }}</td>
                        <td>
                          
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{-- Paginación --}}
        <div class="mt-3">
            {{ $actividadesdocentes->links() }}
        </div>
    </div>
</div>
@stop