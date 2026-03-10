<?php

namespace App\Models;
use App\Models\Actividades;

use Illuminate\Database\Eloquent\Model;

class ActividadDocente extends Model
{
    protected $table = 'actividad_docente';

    protected $fillable = [
        'actividad_id',
        'docente_id',
        'rol',
    ];

    /**
     * Relación con Actividad
     */
    public function actividad()
    {
        return $this->belongsTo(Actividades::class, 'actividad_id');
    }

    /**
     * Relación con Docente
     */
    public function docente()
    {
        return $this->belongsTo(Docentes::class, 'docente_id');
    }
}
