


<table class="w-full table-fixed border border-gray-200 rounded-lg overflow-hidden">
    <thead class="bg-gray-100 text-xs uppercase text-gray-600">
        <tr>
            <th class="px-3 py-2 text-left">Actividad</th>
            <th class="px-3 py-2 text-left">Descripción</th>
            <th class="px-3 py-2 text-center">Activo</th>
        </tr>
    </thead>

    <tbody class="divide-y text-sm">
        @forelse ($actividades as $actividad)
            <tr class="hover:bg-gray-50">
                <td class="px-3 py-2 font-medium truncate text-left">
                    {{ $actividad->nombre }}
                </td>
                <td class="px-3 py-2 text-gray-600 truncate text-left">
                    {{ $actividad->descripcion }}
                </td>
                <td class="px-3 py-2 font-medium truncate text-center">
                    {{ $actividad->activo ? 'Sí' : 'No' }}
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3" class="px-3 py-4 text-center text-gray-500">
                    No hay actividades registradas
                </td>
            </tr>
        @endforelse
    </tbody>
</table>
