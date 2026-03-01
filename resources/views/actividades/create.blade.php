

@extends('adminlte::page')

@section('title', 'Agregar Actividad')

@section('content_header')
    <h1 class="text-2xl font-semibold text-gray-800">Agregar Actividad</h1>
@stop

@section('content')
@vite(['resources/css/app.css'])
<script src="//unpkg.com/alpinejs" defer></script>

<div class="max-w-2xl bg-white rounded-lg shadow p-6 pb-10">
    <form action="{{ route('actividades.store') }}" method="POST" class="space-y-6">
        @csrf

        <div x-data="{ open: false }">

            <!-- BOTÓN -->
            <div class="pt-4 text-left">
                <button
                    type="button"
                    @click="open = true"
                    class="bg-blue-600 text-white py-1 px-3 rounded-md hover:bg-blue-700 transition"
                >
                    Ver actividades
                </button>
            </div>

            <!-- MODAL -->
            <div
                x-show="open"
                x-cloak
                class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50"
                @click.self="open = false"
            >
                <div
                    class="bg-white rounded-lg shadow-xl w-full max-w-xl p-5
                           max-h-[80vh] flex flex-col"
                >

                    <!-- HEADER -->
                    <div class="flex justify-between items-center border-b pb-2">
                        <h2 class="text-base font-semibold">
                            Actividades
                        </h2>
                        <button
                            @click="open = false"
                            class="text-gray-500 hover:text-gray-700 text-lg"
                        >
                            &times;
                        </button>
                    </div>

                    <!-- BODY (SCROLL) -->
                    <div class="mt-3 flex-1 overflow-y-auto text-sm">
                        @include('actividades.index')
                    </div>

                    <!-- FOOTER -->
                    <div class="mt-4 text-right border-t pt-2">
                        <button
                            @click="open = false"
                            class="bg-gray-600 text-white px-3 py-1.5 rounded hover:bg-gray-700 transition text-sm"
                        >
                            Cerrar
                        </button>
                    </div>

                </div>
            </div>

        </div>

        <div class="max-w-md">
            <label class="block text-sm font-medium text-gray-700">
                Nombre
            </label>
            <input
                type="text"
                name="nombre"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                required
            >
        </div>

        {{-- Descripción --}}
        <div class="max-w-lg">
            <label class="block text-sm font-medium text-gray-700">
                Descripción
            </label>
            <textarea
                name="descripcion"
                rows="3"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
            ></textarea>
        </div>

        {{-- Fecha y hora --}}
        <div class="max-w-xs">
            <label class="block text-sm font-medium text-gray-700">
                Fecha y hora
            </label>
            <input
                type="datetime-local"
                name="fecha_hora"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                required
            >
        </div>

        {{-- Activo --}}
        <div>
            <span class="block text-sm font-medium text-gray-700 mb-2">
                Activo
            </span>
            <div class="flex gap-6">
                <label class="inline-flex items-center">
                    <input type="radio" name="activo" value="1" checked class="text-indigo-600">
                    <span class="ml-2 text-sm">Sí</span>
                </label>

                <label class="inline-flex items-center">
                    <input type="radio" name="activo" value="0" class="text-indigo-600">
                    <span class="ml-2 text-sm">No</span>
                </label>
            </div>
        </div>

        {{-- Botón --}}
        <div class="pt-4">
            <button
                type="submit"
                class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition"
            >
                Guardar
            </button>
        </div>

    </form>
</div>
@stop
