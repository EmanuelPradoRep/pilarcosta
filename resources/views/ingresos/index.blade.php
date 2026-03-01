



@extends('adminlte::page')

@section('title', 'Ingresos')

@section('content_header')
    <h1 class="text-xl font-semibold text-gray-700">
        Listado de Ingresos/Egresos
    </h1>
@stop

@section('content')
@vite(['resources/css/app.css'])



    <div class="flex justify-end mb-4">
        <a href="{{ route('ingresos.create') }}" 
        class="bg-blue-500 text-white px-4 py-2 rounded-lg flex items-center hover:bg-blue-600 transition">
            Registrar
        </a>
    </div>
     
    <div class="bg-white rounded-xl shadow border border-gray-100 overflow-hidden">

        

        <div class="overflow-x-auto">
            <table class="w-full text-sm table-fixed">



                <thead class="bg-gray-50 border-b">
                    <tr>
                        <th class="w-1/4 px-4 py-3 text-left font-semibold text-gray-600">
                            Movimiento
                        </th>
                        <th class="w-1/3 px-4 py-3 text-left font-semibold text-gray-600">
                            Concepto
                        </th>
                        <th class="w-1/6 px-4 py-3 text-center font-semibold text-gray-600">
                            Monto
                        </th>

                           <th class="w-1/6 px-4 py-3 text-center font-semibold text-gray-600">
                            Fecha
                        </th>

                        <th class="w-1/6 px-4 py-3 text-center font-semibold text-gray-600">
                            Acciones
                        </th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-100">
                    @foreach($ingreso as $ingresos)
                        <tr class="hover:bg-gray-50 transition">

                            {{-- Ingreso --}}
                            <td class="px-4 py-3 text-gray-800 font-medium truncate">
                                {{ $ingresos->tipo }}
                            </td>

                            {{-- Concepto --}}
                            <td class="px-4 py-3 text-gray-600 truncate">
                                {{ $ingresos->concepto }}
                            </td>

                            {{-- monto --}}
                            <td class="px-4 py-3 text-center text-gray-700">
                                {{$ingresos->monto}}
                            </td>

                             {{-- fecha --}}
                            <td class="px-4 py-3 text-center text-gray-700">
                                {{$ingresos->fecha}}
                            </td>

                            {{-- Acciones --}}
                            <td class="px-4 py-3 text-center space-x-1">
                           <a href="{{ route('ingresos.edit', $ingresos->id) }}" 
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
                {{ $ingreso->links() }}
            </div>
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
