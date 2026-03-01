<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Socios;


class SociosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $socio = Socios::paginate(10);
        return view('socios.index', compact('socio'));
    }





       public function buscar(Request $request)
    {
        $query = Socios::query();

       
    
        if ($request->filled('nombre')) {
            $query->where('nombre', 'like', '%' . $request->nombre . '%');
        }
    
        if ($request->filled('documento')) {
            $query->where('documento', 'like', '%' . $request->documento . '%');
        }
    
        $socio = $query->paginate(10);

    
      
    
        return view('socios.index', compact('socio'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Buscar el socio por ID
        $socio = Socios::findOrFail($id);

        // Retornar la vista de edición con los datos del socio
        return view('socios.edit', compact('socio'));
    }

    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, $id)
    {
        $socio = Socios::findOrFail($id);

        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'sexo' => 'required|string|max:1',
            'documento' => 'required|string|max:255',
            'telefono' => 'nullable|string|max:255',
            'direccion' => 'nullable|string|max:255',
            'fecha_ingreso' => 'required|date',
            'fecha_nacimiento' => 'required|date',
            'activo' => 'required|boolean',
            'observaciones' => 'nullable|string',
        ]);

        $socio->update($validated);

        return redirect()->route('socios.index')->with('success', 'Socio actualizado correctamente');
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
