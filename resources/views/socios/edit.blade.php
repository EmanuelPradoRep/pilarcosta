

@vite(['resources/css/app.css'])
<div class="flex justify-center items-center min-h-screen bg-gray-50">
    <div class="w-full max-w-xl"> <!-- 👈 contenedor centrado -->
        <form action="{{ route('socios.update', $socio->id) }}" method="POST" 
              class="bg-white shadow-md rounded-lg p-6 space-y-4">
            @csrf
            @method('PUT')

            <!-- Título -->
            <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">Editar datos</h2>

            <!-- Nombre -->
            <div>
                <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                <input type="text" id="nombre" name="nombre" value="{{ $socio->nombre }}"
                       class="w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500" />
            </div>

            <!-- Apellido -->
            <div>
                <label for="apellido" class="block text-sm font-medium text-gray-700">Apellido</label>
                <input type="text" id="apellido" name="apellido" value="{{ $socio->apellido }}"
                       class="w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500" />
            </div>

            <!-- Sexo -->
            <div>
                <label for="sexo" class="block text-sm font-medium text-gray-700">Sexo</label>
                <select id="sexo" name="sexo"
                        class="w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="M" {{ $socio->sexo == 'M' ? 'selected' : '' }}>Masculino</option>
                    <option value="F" {{ $socio->sexo == 'F' ? 'selected' : '' }}>Femenino</option>
                    <option value="O" {{ $socio->sexo == 'O' ? 'selected' : '' }}>Otro</option>
                </select>
            </div>

            <!-- Documento -->
            <div>
                <label for="documento" class="block text-sm font-medium text-gray-700">Documento</label>
                <input type="text" id="documento" name="documento" value="{{ $socio->documento }}"
                       class="w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500" />
            </div>

            <!-- Teléfono -->
            <div>
                <label for="telefono" class="block text-sm font-medium text-gray-700">Teléfono</label>
                <input type="text" id="telefono" name="telefono" value="{{ $socio->telefono }}"
                       class="w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500" />
            </div>

            <!-- Dirección -->
            <div>
                <label for="direccion" class="block text-sm font-medium text-gray-700">Dirección</label>
                <input type="text" id="direccion" name="direccion" value="{{ $socio->direccion }}"
                       class="w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500" />
            </div>

            <!-- Fecha ingreso -->
            <div>
                <label for="fecha_ingreso" class="block text-sm font-medium text-gray-700">Fecha ingreso</label>
                <input type="date" id="fecha_ingreso" name="fecha_ingreso" value="{{ $socio->fecha_ingreso }}"
                       class="w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500" />
            </div>

            <!-- Fecha nacimiento -->
            <div>
                <label for="fecha_nacimiento" class="block text-sm font-medium text-gray-700">Fecha nacimiento</label>
                <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ $socio->fecha_nacimiento }}"
                       class="w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500" />
            </div>

            <!-- Activo -->
            <div>
                <label for="activo" class="block text-sm font-medium text-gray-700">Activo</label>
                <select id="activo" name="activo"
                        class="w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="1" {{ $socio->activo ? 'selected' : '' }}>Sí</option>
                    <option value="0" {{ !$socio->activo ? 'selected' : '' }}>No</option>
                </select>
            </div>

            <!-- Observaciones -->
            <div>
                <label for="observaciones" class="block text-sm font-medium text-gray-700">Observaciones</label>
                <textarea id="observaciones" name="observaciones"
                          class="w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500">{{ $socio->observaciones }}</textarea>
            </div>

            <!-- Botón -->
            <button type="submit" 
                    class="w-full bg-blue-500 text-white px-4 py-2 rounded-lg flex items-center justify-center hover:bg-blue-600 transition">
                Editar
            </button>
        </form>
    </div>
</div>