<?php

namespace App\Http\Controllers;
use App\Models\ActividadDocente;
use Illuminate\Http\Request;

class ActividadDocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $actividadesdocentes = ActividadDocente::with(['actividad','docente'])->paginate(10);
        return view('actividadesdocente.index', compact('actividadesdocentes'));
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
