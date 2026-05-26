<?php

namespace App\Models;
use App\Models\Actividades;

use Illuminate\Database\Eloquent\Model;

class ActividadDocente extends Model
{
    protected $table = 'actividad_docente';

    protected $fillable = [
        'persona_id',
        'actividad_id',
        'usuario',
        'es_docente',
          
    ];

    /**
     * Relación con Actividad
     */
    public function actividad()
    {
        return $this->belongsTo(Actividades::class, 'actividad_id');
    }

    public function persona()
    {
        return $this->belongsTo(Personas::class, 'persona_id');
    }

  
}
