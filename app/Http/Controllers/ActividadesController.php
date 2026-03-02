<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\ActividadesSocios;
use App\Models\Actividades;
use App\Models\Socios;
use Illuminate\Http\Request;

class ActividadesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $actividades = Actividades::all();
        return view('actividades.index', compact('actividades'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $actividades = Actividades::all();
        return view('actividades.create', compact('actividades'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    // Tomar todos los datos del formulario
    $data = $request->all();

   
    // Crear el registro en la base de datos
    IngresosActividades::create($data);

    // Redirigir con mensaje de éxito
    return redirect()
        ->route('ingresos.index')
        ->with([
            'status'  => 'success',
            'color'   => 'green',
            'message' => 'Movimiento registrado correctamente'
        ]);




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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
