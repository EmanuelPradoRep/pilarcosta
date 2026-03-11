<?php

namespace App\Http\Controllers;

use App\Models\MovimientosContables;
use App\Models\Actividades;
use Illuminate\Http\Request;

class IngresosClubController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $ingreso = MovimientosContables::paginate(10);

    // Totales separados
    $totalIngresos = MovimientosContables::where('tipo', 'ingreso')->sum('monto');
    $totalEgresos  = MovimientosContables::where('tipo', 'egreso')->sum('monto');

    // Balance final
    $balance = $totalIngresos - $totalEgresos;

    return view('ingresos.index', compact('ingreso', 'totalIngresos', 'totalEgresos', 'balance'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {
        $actividades = Actividades::all();
        return view('ingresos.create', compact('actividades'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // Tomar todos los datos del formulario
    $data = $request->all();

    MovimientosContables::create($data);

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
