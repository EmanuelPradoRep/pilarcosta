<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActividadAlumno extends Model
{
        protected $table = 'actividad_alumnos';

        protected $fillable = [
        'persona_id',
        'actividad_id',
        'usuario',
        
         ];

         public function actividad()
         {
           return $this->belongsTo(Actividades::class, 'actividad_id');
         }

              public function persona()
        {
            return $this->belongsTo(Personas::class, 'persona_id');
        }



}
