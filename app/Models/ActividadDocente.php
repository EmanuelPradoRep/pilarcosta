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
          
    ];

    /**
     * Relación con Actividad
     */
    public function actividad()
    {
        return $this->belongsTo(Actividades::class, 'actividad_id');
    }

  
}
