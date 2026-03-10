

@extends('adminlte::page')

@section('title', 'Socios')

@section('content_header')
    <h1 class="text-xl font-semibold text-gray-700">
        Listado de Socios
    </h1>
@stop

@section('content')
@vite(['resources/css/app.css'])

<div class="card">
    <div class="card-header flex justify-between items-center">
        <form method="GET" action="{{ route('socios.buscar') }}" class="flex space-x-4">
            <div class="flex items-center space-x-2">
                <label for="nombre" class="text-sm font-medium text-gray-700">Nombre</label>
                <input type="text" id="nombre" name="nombre"
                       class="w-48 border border-gray-300 rounded-md shadow-sm p-1 focus:ring-blue-500 focus:border-blue-500" />
            </div>

            <div class="flex items-center space-x-2">
                <label for="documento" class="text-sm font-medium text-gray-700">Documento</label>
                <input type="text" id="documento" name="documento"
                       class="w-48 border border-gray-300 rounded-md shadow-sm p-1 focus:ring-blue-500 focus:border-blue-500" />
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">
                Buscar
            </button>
        </form>

        <a href="http://clubpilarcosta.com.uy/public/register" class="btn btn-primary">
            Registrarse
        </a>
    </div>

    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Documento</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($socio as $socios)
                    <tr>
                        <td>{{ $socios->nombre }}</td>
                        <td>{{ $socios->user->email }}</td>
                        <td>{{ $socios->documento }}</td>
                        <td>
                            <a href="{{ route('socios.edit', $socios->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <a href="#" class="btn btn-danger btn-sm">Eliminar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{-- Paginación --}}
        <div class="mt-3">
            {{ $socio->links() }}
        </div>
    </div>
</div>
@stop