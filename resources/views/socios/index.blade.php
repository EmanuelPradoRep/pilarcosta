

@extends('adminlte::page')

@section('title', 'Socios')

@section('content_header')
    <h1 class="text-xl font-semibold text-gray-700">
        Listado de Socios
    </h1>
@stop

@section('content')
@vite(['resources/css/app.css'])


<div class="w-full px-4">

   <form method="GET" action="{{ route('socios.buscar') }}" class="flex flex-col space-y-2 mb-4">

    <div class="mb-4 flex items-center space-x-8">
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

     
        <div class="flex flex-wrap gap-4">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg flex items-center hover:bg-blue-600 transition">
                Buscar
            </button>
        </div>

        <a href="http://clubpilarcosta.com.uy/public/register" 
            class="text-blue-600 hover:underline">
            Registrarse
        </a>

    </div>
</form>



</div>
     
    <div class="bg-white rounded-xl shadow border border-gray-100 overflow-hidden">

        <div class="overflow-x-auto">
            <table class="w-full text-sm table-fixed">

                <thead class="bg-gray-50 border-b">
                    <tr>
                        <th class="w-1/4 px-4 py-3 text-left font-semibold text-gray-600">
                            Nombre
                        </th>
                        <th class="w-1/3 px-4 py-3 text-left font-semibold text-gray-600">
                            Email
                        </th>
                        <th class="w-1/6 px-4 py-3 text-center font-semibold text-gray-600">
                            Documento
                        </th>
                        <th class="w-1/6 px-4 py-3 text-center font-semibold text-gray-600">
                            Acciones
                        </th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-100">
                    @foreach($socio as $socios)
                        <tr class="hover:bg-gray-50 transition">

                            {{-- Nombre --}}
                            <td class="px-4 py-3 text-gray-800 font-medium truncate">
                                {{ $socios->nombre }}
                            </td>

                            {{-- Email --}}
                            <td class="px-4 py-3 text-gray-600 truncate">
                                {{ $socios->user->email }}
                            </td>

                            {{-- Documento --}}
                            <td class="px-4 py-3 text-center text-gray-700">
                                {{ $socios->documento }}
                            </td>

                            {{-- Acciones --}}
                            <td class="px-4 py-3 text-center space-x-1">
                               <a href="{{ route('socios.edit', $socios->id) }}"
                                class="inline-flex items-center px-3 py-1 text-xs rounded-full bg-blue-500 text-white hover:bg-blue-600 transition">
                                    Editar
                            </a>

                                <a href="#"
                                   class="inline-flex items-center px-3 py-1 text-xs rounded-full bg-red-500 text-white hover:bg-red-600 transition">
                                    Eliminar
                                </a>
                            </td>

                        </tr>
                    @endforeach
                </tbody>

            </table>
            <div class="mt-4">
                {{ $socio->links() }}
            </div>
        </div>

       

    </div>

</div>
@stop
