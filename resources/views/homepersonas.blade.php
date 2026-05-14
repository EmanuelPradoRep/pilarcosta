
<x-app-layout>
    @vite(['resources/css/app.css'])

    <x-slot name="header">
        <h2 class="text-2xl font-semibold text-gray-800">Actividades</h2>
        <p class="text-sm text-gray-500">Gestioná tus actividades y sumate a nuevas</p>
    </x-slot>

    <div class="grid gap-6 md:grid-cols-2 mt-6">

        <!-- Tus actividades -->
        <div class="bg-white rounded-xl shadow-sm border p-5 flex flex-col justify-between">
            <h3 class="text-lg font-semibold mb-4 flex items-center gap-2">
                <span class="text-green-600">✔</span> Tus actividades
            </h3>

            <div class="flex-1">
                @forelse($actividades as $actividadAlumno)
                    <div class="flex justify-between items-center p-4 mb-3 border rounded-lg hover:bg-gray-50 transition">
                        <div>
                            <p class="font-medium text-gray-800">
                                {{ $actividadAlumno->actividad->nombre }}
                            </p>
                            <p class="text-sm text-gray-500">
                                {{-- horario o datos extra si querés --}}
                            </p>
                        </div>
                        <span class="text-xs bg-green-100 text-green-700 px-3 py-1 rounded-full">
                            Inscripto
                        </span>
                    </div>
                @empty
                    <p class="text-sm text-gray-500">No estás inscripto en ninguna actividad.</p>
                @endforelse
            </div>

            <div class="mt-4 self-end">
                {{ $actividades->links() }}
            </div>
        </div>

        <!-- Actividades disponibles -->
        <div class="bg-white rounded-xl shadow-sm border p-5 flex flex-col justify-between">
            <h3 class="text-lg font-semibold mb-4 flex items-center gap-2">
                🏃 Actividades disponibles
            </h3>

            <div class="flex-1">
                @foreach($actividadestotales as $actividadestotale)
                    <div class="p-4 border rounded-lg mb-3 hover:shadow transition flex justify-between items-center">
                        <div>
                            <p class="font-semibold text-gray-800">{{ $actividadestotale->nombre }}</p>
                            <p class="text-sm text-gray-500">
                                Lunes a viernes · 17:00
                            </p>
                        </div>

                        <button
                            class="bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium px-4 py-2 rounded-lg transition">
                            Agendarme
                        </button>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
