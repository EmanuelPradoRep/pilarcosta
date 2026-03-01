

@extends('adminlte::page')

@section('title', 'Registrar Movimiento')

@section('content_header')
    <h1 class="text-2xl font-semibold text-gray-800">Registrar Ingreso/Egreso</h1>
@stop

@section('content')
@vite(['resources/css/app.css'])
<script src="//unpkg.com/alpinejs" defer></script>

<div class="max-w-2xl bg-white rounded-lg shadow p-6 pb-10">
    <form action="{{ route('ingresos.store') }}" method="POST" class="space-y-6">
        @csrf

        {{-- Actividad --}}
        <div class="max-w-md">
            <label class="block text-sm font-medium text-gray-700">Actividad</label>
            <select name="actividad_id"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                required>
                @foreach($actividades as $actividad)
                    <option value="{{ $actividad->id }}">{{ $actividad->nombre }}</option>
                @endforeach
            </select>
        </div>

        {{-- Tipo --}}
        <div>
            <span class="block text-sm font-medium text-gray-700 mb-2">Tipo</span>
            <div class="flex gap-6">
                <label class="inline-flex items-center">
                    <input type="radio" name="tipo" value="ingreso" checked class="text-green-600">
                    <span class="ml-2 text-sm">Ingreso</span>
                </label>
                <label class="inline-flex items-center">
                    <input type="radio" name="tipo" value="egreso" class="text-red-600">
                    <span class="ml-2 text-sm">Egreso</span>
                </label>
            </div>
        </div>

        {{-- Concepto --}}
        <div class="max-w-md">
            <label class="block text-sm font-medium text-gray-700">Concepto</label>
            <input type="text" name="concepto"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                required>
        </div>

        {{-- Monto --}}
        <div class="max-w-xs">
            <label class="block text-sm font-medium text-gray-700">Monto</label>
            <input type="number" step="0.01" name="monto"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                required>
        </div>

        {{-- Fecha --}}
        <div class="max-w-xs">
            <label class="block text-sm font-medium text-gray-700">Fecha</label>
            <input type="date" name="fecha"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                required>
        </div>

        {{-- Observaciones --}}
        <div class="max-w-lg">
            <label class="block text-sm font-medium text-gray-700">Observaciones</label>
            <textarea name="observaciones" rows="3"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500"></textarea>
        </div>

        {{-- Botón --}}
        <div class="pt-4">
            <button type="submit"
                class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition">
                Guardar
            </button>
        </div>
    </form>
</div>
@stop