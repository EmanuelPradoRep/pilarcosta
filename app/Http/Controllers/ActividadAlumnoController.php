<?php


namespace App\Http\Controllers;
use App\Models\ActividadAlumno;
use App\Models\Personas;
use App\Models\Actividades;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActividadAlumnoController extends Controller
{
  
  

   public function index()
    {
        $usuarioId = Auth::id();
        $actividadestotales = Actividades::All();
        $actividades = ActividadAlumno::where('persona_id', $usuarioId)->paginate(10);

        return view('homepersonas', compact('actividades', 'actividadestotales'));
    }


    public function adminIndex()
    {
       $actividades = ActividadAlumno::paginate(20); // todos los alumnos
       return view('actividades.panel.index', compact('actividades'));

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
