
@extends('adminlte::page')

@section('title', 'Ingresos')

@section('content_header')
    <h1 class="text-xl font-semibold text-gray-700">
        Listado de Ingresos/Egresos
    </h1>
@stop

@section('content')
@vite(['resources/css/app.css'])

<div class="card">
    <div class="card-header flex justify-end">
        <a href="{{ route('ingresos.create') }}" 
           class="btn btn-primary">
            Registrar
        </a>
    </div>

    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Movimiento</th>
                    <th>Concepto</th>
                    <th>Monto</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ingreso as $ingresos)
                    <tr>
                        <td>{{ $ingresos->tipo }}</td>
                        <td>{{ $ingresos->concepto }}</td>
                        <td class="text-center">{{ $ingresos->monto }}</td>
                        <td class="text-center">{{ $ingresos->fecha }}</td>
                        <td class="text-center">
                            <a href="{{ route('ingresos.edit', $ingresos->id) }}" 
                               class="btn btn-warning btn-sm">Editar</a>
                            <a href="#" 
                               class="btn btn-danger btn-sm">Eliminar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{-- Paginación --}}
        <div class="mt-3">
            {{ $ingreso->links() }}
        </div>
    </div>
</div>

<div class="mt-6 flex justify-end space-x-6">
    <div class="flex items-center space-x-2">
        <label for="totalIngresos" class="text-sm font-medium text-green-700">Total Ingresos</label>
        <input id="totalIngresos" type="text" 
               value="{{ number_format($totalIngresos, 2, ',', '.') }}" 
               disabled
               class="w-32 text-right rounded-md border-gray-300 bg-green-100 shadow-sm">
    </div>

    <div class="flex items-center space-x-2">
        <label for="totalEgresos" class="text-sm font-medium text-red-700">Total Egresos</label>
        <input id="totalEgresos" type="text" 
               value="{{ number_format($totalEgresos, 2, ',', '.') }}" 
               disabled
               class="w-32 text-right rounded-md border-gray-300 bg-red-100 shadow-sm">
    </div>

    <div class="flex items-center space-x-2">
        <label for="balance" class="text-sm font-medium text-gray-700">Balance</label>
        <input id="balance" type="text" 
               value="{{ number_format($balance, 2, ',', '.') }}" 
               disabled
               class="w-32 text-right rounded-md border-gray-300 bg-gray-100 shadow-sm">
    </div>
</div>
@stop